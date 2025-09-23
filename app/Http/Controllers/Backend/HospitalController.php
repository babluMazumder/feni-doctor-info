<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Hospital\HospitalInterface;
use App\Http\Requests\Hospital\hospitalStoreRequest;
use App\Http\Requests\Hospital\hospitalUpdateRequest;

class HospitalController extends Controller
{
     protected $hospitalRepository;
    public function __construct( HospitalInterface $hospitalRepository)
    {

         $this->hospitalRepository = $hospitalRepository;
    }
    //
    public function index()
    {
        $hospitals = $this->hospitalRepository->all(paginate: settings('paginate_value'));
        return view('backend.hospital.index', compact('hospitals'));
    }
    public function create()
    {
        return view('backend.hospital.create');
    }
    public function store(hospitalStoreRequest $request)
    {

        $result = $this->hospitalRepository->store($request);

        if ($result['status']) {
            return redirect()->route('hospital.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();

    }
    public function edit($id)
    {

        $hospital = $this->hospitalRepository->get($id);

        return view('backend.hospital.edit',compact('hospital') );
    }
    public function update(hospitalUpdateRequest $request, $id)
    {
        $result = $this->hospitalRepository->update($request, $id);

        if ($result['status']) {
            return redirect()->route('hospital.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();
    }


    public function delete($id)
    {    
        $result = $this->hospitalRepository->delete($id);
        return response()->json($result, $result['status_code']);
    }
}
