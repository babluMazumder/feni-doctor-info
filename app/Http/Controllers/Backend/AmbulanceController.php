<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Ambulance\AmbulanceInterface;
use App\Http\Requests\Ambulance\AmbulanceStoreRequest;
use App\Http\Requests\Ambulance\AmbulanceUpdateRequest;

class AmbulanceController extends Controller
{

      protected $ambulanceRepository;
    public function __construct( AmbulanceInterface $ambulanceRepository)
    {

         $this->ambulanceRepository = $ambulanceRepository;
    }
    //
    public function index()
    {
        $ambulance = $this->ambulanceRepository->all(paginate: settings('paginate_value'));

        return view('backend.ambulance.index', compact('ambulance'));
    }
    public function create()
    {
        return view('backend.ambulance.create');
    }
    public function store(AmbulanceStoreRequest $request)
    {

        $result = $this->ambulanceRepository->store($request);

        if ($result['status']) {
            return redirect()->route('ambulance.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();

    }
    public function edit($id)
    {

        $ambulance = $this->ambulanceRepository->get($id);

        return view('backend.ambulance.edit',compact('ambulance') );
    }
    public function update(AmbulanceUpdateRequest $request, $id)
    {
        $result = $this->ambulanceRepository->update($request, $id);

        if ($result['status']) {
            return redirect()->route('ambulance.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();
    }


    public function delete($id)
    {
        $result = $this->ambulanceRepository->delete($id);
        return response()->json($result, $result['status_code']);
    }
}
