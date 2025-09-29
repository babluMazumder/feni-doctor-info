<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryInterface;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Http\Requests\Ambulance\AmbulanceStoreRequest;

class CategoryController extends Controller
{

      protected $categoryRepository;
    public function __construct( CategoryInterface $categoryRepository)
    {

         $this->categoryRepository = $categoryRepository;
    }
    //
    public function index()
    {
        $category = $this->categoryRepository->all(paginate: settings('paginate_value'));

        return view('backend.category.index', compact('category'));
    }
    public function create()
    {
        return view('backend.category.create');
    }
    public function store(CategoryStoreRequest $request)
    {

        $result = $this->categoryRepository->store($request);

        if ($result['status']) {
            return redirect()->route('category.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();

    }
    public function edit($id)
    {

        $category = $this->categoryRepository->get($id);

        return view('backend.category.edit',compact('category') );
    }
    public function update(CategoryUpdateRequest $request, $id)
    {
        $result = $this->categoryRepository->update($request, $id);

        if ($result['status']) {
            return redirect()->route('category.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();
    }


    public function delete($id)
    {
        $result = $this->categoryRepository->delete($id);
        return response()->json($result, $result['status_code']);
    }
}
