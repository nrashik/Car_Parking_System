<?php

namespace App\Providers;

use App\Models\Area;
use App\Models\Category;
use Illuminate\Support\Facades\View;
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
        $all_category=Category::all();
        View::share('category',$all_category);

        $areas=Area::all();
        view::share('area',$areas);

    }
}
