<?php

namespace App\View\Components\Frontend;

use Closure;
use App\Enums\Status;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Modules\Blog\Repositories\Blog\BlogInterface;

class Blog extends Component
{


    private $repo;

    public function __construct( BlogInterface $repo)
    {


        $this->repo  = $repo;
    }

    public function render(): View|Closure|string
    {
         $paginate = ceil(settings('paginate_value') / 4) * 4;

        $blogs = Cache::rememberForever("blogs", fn () => $this->repo->all( status: Status::ACTIVE->value === 1,paginate: $paginate, orderBy: 'position'));
        // dd($blogs);
        return view('components.frontend.blog', compact('blogs'));
    }
}
