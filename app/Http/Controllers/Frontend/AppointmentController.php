<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Backend\Appointment;
use App\Http\Controllers\Controller;
use App\Repositories\Appointment\AppointmentInterface;

class AppointmentController extends Controller
{
    private $repo;

    public function __construct(AppointmentInterface $repo)
    {
        $this->repo = $repo;
    }

    // public function index()
    // {
    //     $feedbacks = $this->repo->all(paginate: settings('paginate_value'));
    //     return view('backend.contact.index', compact('feedbacks'));
    // }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name'   => 'required|string|max:255',
            'phone_number' => 'required|digits_between:8,15',
        ]);
        $result =  $this->repo->storeMessage($request);

        if (request()->wantsJson()) return response()->json($result);

        if ($result['status']) {
            return redirect()->back()->with('success', $result['message']);
        }
        return redirect()->back()->with('danger', $result['message'])->withInput();
    }
}
