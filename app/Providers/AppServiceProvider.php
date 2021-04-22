<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Menu;
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
       $category = Menu::with(['translate'=>function ($q){
           $q->where('code',app()->getLocale())->where('type','menu');
       },'submenu.translate'=>function ($q){
           $q->where('code',app()->getLocale())->where('type','submenu');
       }])->get();
        view()->share('category', $category);
    }
}
