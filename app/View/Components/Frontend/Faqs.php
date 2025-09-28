<?php

namespace App\View\Components\Frontend;

use Closure;
use App\Enums\Status;
use Modules\Faq\Entities\Faq;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class Faqs extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
         $faqs = Cache::rememberForever('faqs', function () {
            return Faq::where('status', Status::ACTIVE)->orderBy('position', 'asc')->take(5)->get();
        });
        return view('components.frontend.faqs', compact('faqs'));
    }
}
