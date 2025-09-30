<?php

namespace App\View\Components\Frontend;

use Closure;
use App\Enums\Status;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Backend\Category as CategoryModel;

class Category extends Component
{
    protected $categoryModel;

    /**
     * Create a new component instance.
     */
    public function __construct(CategoryModel $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Cache::remember('categories',now()->addMinutes(30),fn() => $this->categoryModel::where('status', Status::ACTIVE)->orderBy('id', 'desc')->get()
        );
        return view('components.frontend.category', compact('categories'));
    }
}
