<?php

namespace App\View\Composers;

use App\Enums\Status;
use Illuminate\View\View;
use App\Repositories\SocialIcon\SocialIconInterface;
use Modules\SocialLink\Repositories\SocialLinkInterface;

class SocialLinkComposer
{
    protected $repo;

    public function __construct(SocialLinkInterface $repo)
    {

        $this->repo     = $repo;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('social_links', $this->repo->getActiveAll());
    }
}
