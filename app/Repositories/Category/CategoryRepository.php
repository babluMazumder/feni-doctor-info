<?php

namespace App\Repositories\Category;

use App\Repositories\Category\CategoryInterface;
use App\Traits\ReturnFormatTrait;
use App\Enums\Status;
use App\Models\Backend\Category;

class CategoryRepository implements CategoryInterface
{
    use ReturnFormatTrait;
    protected $model;
    public function __construct(Category $model)
    {

        $this->model = $model;
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
