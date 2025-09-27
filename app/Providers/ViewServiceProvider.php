<?php

namespace App\Providers;

use App\View\Composers\LangComposer;
use App\View\Composers\SocialLinkComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('backend.partials.navbar', LangComposer::class);
        View::composer('frontend.include.header', SocialLinkComposer::class);
        View::composer('frontend.include.footer', SocialLinkComposer::class);
        View::composer('frontend.include.header', LangComposer::class);
    }
}
