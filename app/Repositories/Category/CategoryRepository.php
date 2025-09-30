<?php

namespace App\Repositories\Category;

use App\Enums\Status;
use App\Enums\ImageSize;
use App\Models\Backend\Category;
use App\Traits\ReturnFormatTrait;
use App\Repositories\Upload\UploadInterface;
use App\Repositories\Category\CategoryInterface;

class CategoryRepository implements CategoryInterface
{
    use ReturnFormatTrait;
    protected $model, $upload;
    public function __construct(Category $model,UploadInterface $upload)
    {

        $this->model = $model;

        $this->upload   = $upload;
    }




    public function all(?int $paginate = null,)
    {
        $query = $this->model::query();


        return  $paginate != null ? $query->paginate($paginate) : $query->get();
    }
    public function get($id)
    {
        return $this->model::find($id);
    }

    public function store($request)
    {
        // dd($request->all());
        try {

            $category = new $this->model;

            $category->title = $request->title;
            $category->sub_title = $request->sub_title;
            // $category->icon = $request->icon;
             if ($request->hasFile('icon')) {
                $category->icon = $this->upload->uploadImage($request->icon, 'category/', ImageSize::IMAGE_750x450
                );
            }
            $category->position = $request->position;


            // Convert status to enum value
            $category->status =$request->status;

            $category->save();




            return $this->responseWithSuccess(___('alert.successfully_added'));
        } catch (\Throwable $th) {
            dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function update($request)
    {
        try {



            $category =  $this->model::findOrFail($request->id);

            $category->title = $request->title;
            $category->sub_title = $request->sub_title;
             if ($request->hasFile('icon')) {
                $category->icon = $this->upload->uploadImage($request->icon, 'category/', ImageSize::IMAGE_750x450
                );
            }
            $category->position = $request->position;


            // Convert status to enum value
            $category->status =$request->status;

            $category->save();


            return $this->responseWithSuccess(___('alert.successfully_updated'));
        } catch (\Throwable $th) {
            dd($th);
            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }

    public function delete($id)
    {
        try {
            $category = $this->model::findOrFail($id);

            $category->delete();

            return $this->responseWithSuccess(___('alert.successfully_deleted'));
        } catch (\Throwable $th) {

            return $this->responseWithError(___('alert.something_went_wrong'));
        }
    }
}
