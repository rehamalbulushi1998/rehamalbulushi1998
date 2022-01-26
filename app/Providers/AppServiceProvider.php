<?php

namespace App\Providers;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Health::checks([
        //    UsedDiskSpaceCheck::new()
            //    ->warnWhenUsedSpaceIsAbovePercentage(70)
              //  ->failWhenUsedSpaceIsAbovePercentage(90),
       // ]);
    }
}
