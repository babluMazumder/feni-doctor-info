<?php

namespace App\View\Components\Frontend;

use Closure;
use App\Enums\Status;
use App\Models\Backend\Doctor;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use App\Repositories\Doctor\DoctorInterface;

class Doctors extends Component
{
    /**
     * Create a new component instance.
     */
    protected $model;
    public function __construct( Doctor $model)
    {
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $doctors=Cache::remember('doctors',now()->addMinutes(30),fn() => $this->model::where('status', Status::ACTIVE)->orderBy('id', 'desc')->take(10)->get()
        );
        return view('components.frontend.doctors', compact('doctors'));
    }
}
