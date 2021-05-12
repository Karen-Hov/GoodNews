<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
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
        try {
            DB::connection()->getPdo();

            $category = Menu::with(['translate' => function ($q) {
                $q->where('code', app()->getLocale())->where('type', 'menu');
            }, 'submenu.translate' => function ($q) {
                $q->where('code', app()->getLocale())->where('type', 'submenu');
            }])->get();
            view()->share('category', $category);
        }catch (\Exception $e){

        }

    }
}
