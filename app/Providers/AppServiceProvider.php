<?php

namespace App\Providers;

use App\Models\Category;
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
       $category = Category::with(['translate'=>function ($q){
           $q->where('code',app()->getLocale())->where('type','category');
       }])->get();

        view()->share('category', $category);
    }
}
