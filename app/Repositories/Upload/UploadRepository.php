<?php

namespace App\Repositories\Upload;

use App\Models\Upload;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Repositories\Upload\UploadInterface;
use Intervention\Image\Laravel\Facades\Image;

class UploadRepository implements UploadInterface
{
    public function uploadImage($image, $path, array $image_sizes = [], $old_upload_id = null)
    {
        if (blank($image)) {
            return $old_upload_id;
        }

        // delete old uploaded images
        if ($old_upload_id) {
            $this->deleteImage($old_upload_id, 'update');
        }

        $fileType = strtolower($image->getClientOriginalExtension());
        if ($fileType === 'jpg') {
            $fileType = 'jpeg';
        }

        $directory = public_path("uploads/$path");

        // make directory if not exist
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        // original image
        $originalImageName = $this->imageName('original', $fileType);
        $originalImageUrl  = $directory . DIRECTORY_SEPARATOR . $originalImageName;

        $this->imageSaveToStorage($image, $originalImageUrl, true, $fileType);

        $all_url = [];

        foreach ($image_sizes as $key => $image_size) {
            $imageName  = $this->imageName(++$key, 'webp');
            $imageUrl   = $directory . DIRECTORY_SEPARATOR . $imageName;
            $all_url[]  = $imageUrl;

            $this->imageSaveToStorage($image, $imageUrl, false, 'webp', $image_size[0], $image_size[1]);
        }

        $upload = Upload::find($old_upload_id);
        if (!$upload) {
            $upload = new Upload();
        }

        $public_path = public_path() . DIRECTORY_SEPARATOR . "uploads";
        $upload->original    = str_replace($public_path, 'uploads', $originalImageUrl);
        $upload->image_one   = !empty($all_url[0]) ? str_replace($public_path, 'uploads', $all_url[0]) : null;
        $upload->image_two   = !empty($all_url[1]) ? str_replace($public_path, 'uploads', $all_url[1]) : null;
        $upload->image_three = !empty($all_url[2]) ? str_replace($public_path, 'uploads', $all_url[2]) : null;
        $upload->type        = $fileType === 'pdf' ? 'file' : 'image';
        $upload->save();

        return $upload->id;
    }

    public function imageName($size, $fileType)
    {
        $purpose = $size . '.' . $fileType;
        $purpose = str_replace(" ", "-", $purpose);
        $purpose = date('Y-m-d') . '-' . strtolower(Str::random(12)) . '-' . $purpose;

        return $purpose;
    }

    public function imageSaveToStorage($requestImage, $imageUrl, $isOriginal = false, $fileType = 'jpeg', $width = null, $height = null)
    {
        if ($fileType === 'pdf') {
            $requestImage->move(dirname($imageUrl), basename($imageUrl));
        } else {
            $image = Image::read($requestImage);

            if ($isOriginal) {
                $image->save($imageUrl, 90);
            } else {
                if ($width && $height) {
                    $image->resize($width, $height, function ($constraint) {
                        $constraint->aspectRatio();
                    })->toWebp()->save($imageUrl, 90);
                } else {
                    $image->toWebp()->save($imageUrl, 90);
                }
            }
        }

        return true;
    }


    public function deleteImage($old_upload_id, $slug = "update")
    {
        $upload = Upload::find($old_upload_id);
        if ($upload) {
            foreach (['original', 'image_one', 'image_two', 'image_three'] as $field) {
                if ($upload->$field && File::exists(public_path($upload->$field))) {
                    unlink(public_path($upload->$field));
                }
            }

            if ($slug === "delete") {
                $upload->delete();
            }
        }

        return true;
    }

    function uploadSeederByPath(string $sourcePath = null, string $uploadDirectory = "assets", string $namePrefix = 'copy')
    {
        $uploadDirectory = "uploads/{$uploadDirectory}/";

        if (!file_exists(public_path($uploadDirectory))) {
            mkdir(public_path($uploadDirectory), 0755, true);
        }

        $basename           = pathinfo(public_path($sourcePath), PATHINFO_BASENAME);
        $name               = uniqid("{$namePrefix}_") . '_' . $basename;
        $destinationPath    = $uploadDirectory . $name;

        if (!copy(public_path($sourcePath), public_path($destinationPath))) {
            return null;
        }

        $upload              = new Upload();
        $upload->original    = $destinationPath;
        $upload->image_one   = $destinationPath;
        $upload->image_two   = $destinationPath;
        $upload->image_three = $destinationPath;

        $fileType            = pathinfo($destinationPath, PATHINFO_EXTENSION);
        $upload->type        = in_array(strtolower($fileType), ['jpg', 'jpeg', 'png', 'gif', 'webp']) ? 'image' : 'file';

        $upload->save();

        return $upload->id;
    }
}
