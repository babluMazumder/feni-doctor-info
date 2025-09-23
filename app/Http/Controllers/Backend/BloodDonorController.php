<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BloodDonor\BloodDonorInterface;
use App\Http\Requests\BloodDonor\BloodDonorStoreRequest;
use App\Http\Requests\BloodDonor\BloodDonorUpdateRequest;

class BloodDonorController extends Controller
{
      protected $bloodBankRepository;
    public function __construct( BloodDonorInterface $bloodBankRepository)
    {

         $this->bloodBankRepository = $bloodBankRepository;
    }
    //
    public function index()
    {
        $bloodDonors = $this->bloodBankRepository->all(paginate: settings('paginate_value'));
        
        return view('backend.blood-donor.index', compact('bloodDonors'));
    }
    public function create()
    {
        return view('backend.blood-donor.create');
    }
    public function store(BloodDonorStoreRequest $request)
    {

        $result = $this->bloodBankRepository->store($request);

        if ($result['status']) {
            return redirect()->route('blooddonor.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();

    }
    public function edit($id)
    {

        $bloodDonor = $this->bloodBankRepository->get($id);

        return view('backend.blood-donor.edit',compact('bloodDonor') );
    }
    public function update(BloodDonorUpdateRequest $request, $id)
    {
        $result = $this->bloodBankRepository->update($request, $id);

        if ($result['status']) {
            return redirect()->route('blooddonor.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();
    }


    public function delete($id)
    {    
        $result = $this->bloodBankRepository->delete($id);
        return response()->json($result, $result['status_code']);
    }
}
