<?php

namespace App\Providers;

use App\Interfaces\SocialMediaServiceInterface;
use App\Services\LinkedInService;
use App\Services\TwitterService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SocialMediaServiceInterface::class, function(){
            return
                new LinkedInService()
                // new TwitterService('api-key')
            ;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
