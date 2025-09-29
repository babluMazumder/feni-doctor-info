<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Doctor\DoctorInterface;
use App\Http\Requests\Doctor\DoctorStoreRequest;
use App\Repositories\Category\CategoryInterface;
use App\Http\Requests\Doctor\DoctorUpdateRequest;

class DoctorController extends Controller
{
       protected $doctorRepository, $categoryRepository;
    public function __construct( DoctorInterface $doctorRepository,CategoryInterface $categoryRepository)
    {

         $this->doctorRepository = $doctorRepository;
         $this->categoryRepository = $categoryRepository;
    }
    //
    public function index()
    {
        $doctors = $this->doctorRepository->all(paginate: settings('paginate_value'));

        return view('backend.doctor.index', compact('doctors'));
    }
    public function create()
    {
         $categories = $this->categoryRepository->all();
        return view('backend.doctor.create', compact('categories'));
    }
    public function store(DoctorStoreRequest $request)
    {

        $result = $this->doctorRepository->store($request);

        if ($result['status']) {
            return redirect()->route('doctor.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();

    }
    public function edit($id)
    {

        $doctor = $this->doctorRepository->get($id);
         $categories = $this->categoryRepository->all();
        return view('backend.doctor.edit',compact('doctor','categories') );
    }
    public function update(DoctorUpdateRequest $request, $id)
    {
        $result = $this->doctorRepository->update($request, $id);

        if ($result['status']) {
            return redirect()->route('doctor.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();
    }


    public function delete($id)
    {
        $result = $this->doctorRepository->delete($id);
        return response()->json($result, $result['status_code']);
    }
}
