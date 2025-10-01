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

    public function index()
    {
        // $feedbacks = $this->repo->all(paginate: settings('paginate_value'));
         $appointments = Appointment::all();
        return view('backend.appointment.index', compact('appointments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name'   => 'required|string|max:255',
            'phone_number' => 'required|digits_between:8,15',
            'day' => 'required|string|max:255',
            'doctor_id' => 'required|exists:doctors,id',
        ]);
        $result =  $this->repo->storeMessage($request);

        if ($result['status']) {
            return redirect()->back()->with('success', $result['message']);
        }
        return redirect()->back()->with('danger', $result['message'])->withInput();
    }
}
