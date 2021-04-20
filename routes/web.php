<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\HomeController as HomeAdminController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', [HomeAdminController::class,'logout']);
Route::match(['get', 'post'],'/login', [LoginController::class,'showLoginForm ']);

Route::match(['get', 'post'], '/lang/{locale}', [LangController::class,'switchLang'])->name('switchLang');

Route::get('/', function () {
    return redirect(app()->getLocale());
});



Route::prefix('my_admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeAdminController::class,'index']);
    Route::resources([
        'posts' => PostController::class,
        'about_us' => PostController::class,
        'categories' =>CategoryController::class,


//        'contact_us' => ContactAdminController::class,
//        'subscribe' => SubscribetAdminController::class,
    ]);

});







Route::group(['prefix' => '{locale}', 'middleware' => 'lang', 'as'=> 'site'], function () {

    Route::get('/', [HomeController::class,'index']);
    Route::get('/blog', [HomeController::class,'blog']);


});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false]);
