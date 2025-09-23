<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\BloodBank\BloodBankInterface;
use App\Http\Requests\BloodBank\BloodBankStoreRequest;
use App\Http\Requests\BloodBank\BloodBankUpdateRequest;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class BloodBankController extends Controller
{

    protected $bloodBankRepository;
    public function __construct(BloodBankInterface $bloodBankRepository)
    {

        $this->bloodBankRepository = $bloodBankRepository;
    }
    //
    public function index()
    {
        $bloodBank = $this->bloodBankRepository->all(paginate: settings('paginate_value')); // Set pagination to 10 items per page
        return view('backend.blood-bank.index', compact('bloodBank'));
    }
    public function create()
    {
        return view('backend.blood-bank.create');
    }
    public function store(BloodBankStoreRequest $request)
    {

        $result = $this->bloodBankRepository->store($request);

        if ($result['status']) {
            return redirect()->route('bloodbank.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();
    }
    public function edit($id)
    {

        $bloodBank = $this->bloodBankRepository->get($id);

        return view('backend.blood-bank.edit', compact('bloodBank'));
    }
    public function update(BloodBankUpdateRequest $request, $id)
    {
        $result = $this->bloodBankRepository->update($request, $id);

        if ($result['status']) {
            return redirect()->route('bloodbank.index')->with('success', $result['message']);
        }
        return back()->with('danger', $result['message'])->withInput();
    }


    public function delete($id)
    {
        $result = $this->bloodBankRepository->delete($id);
        return response()->json($result, $result['status_code']);
    }
}
