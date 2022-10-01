<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantOwnerController
;


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
    return view('welcome');
});


 Route::group(['middleware'=>'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


   
});
Route::resource('restaurants', RestaurantOwnerController::class)->middleware(['auth']);








require __DIR__.'/auth.php';
