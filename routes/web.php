<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ChefController;
use App\Http\Controllers\Web\MenuController;
use App\Http\Controllers\Manage\DishController;
use App\Http\Controllers\Manage\HomeController;
use App\Http\Controllers\Manage\MealController;
use App\Http\Controllers\Web\GalleryController;
use App\Http\Controllers\Web\ContactsController;
use App\Http\Controllers\Web\HomeController as WebHomeController;

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

Route::get('/', function () {
    return redirect('/home');
});


// Begin web (Front) Routes
Route::get('/home', [WebHomeController::class, 'index'])->name('home.index');
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/chefs', [ChefController::class, 'index'])->name('chefs.index');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
// End web (Front) Routes


// Begin Manage (Dashboard) Routes
Route::group(['prefix' => 'manage', 'as' => 'manage.', 'middleware' => ['auth', 'isManager']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::resource('/meals', MealController::class);
    Route::resource('/dishes', DishController::class);
    Route::resource('/chefs', MealController::class);
    Route::resource('/contacts', MealController::class);
});
// End Manage (Dashboard) Routes

Auth::routes();
