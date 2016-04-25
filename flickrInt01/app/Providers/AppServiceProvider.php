<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\IPhotoSearch;
use App\FlickrPhotoSearch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	//$this->app->singleton('IPhotoSearch', 'FlickrPhotoSearch' );
        //

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
	$this->app->bind(IPhotoSearch::class, FlickrPhotoSearch::class );
    }
}
