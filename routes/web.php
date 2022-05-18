<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App\Http\Controllers\Controller;

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

Route::get('index', 'Controller@showcar');
Route::get('/', 'Controller@showcar');

Route::get('Login', function () {
    return view('../resources/views/auth/forgot-password');
});

//Route::get('/', function () {
 //return view('Login');
//});

Route::get('/dashboard', 'Controller@showcarr')->middleware("auth");

  Route::get('carid', 'Controller@showcarid');

Route::get('/Login', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

Route::get("addcar",'Controller@addcar')->middleware("auth");

Route::post("insert",'Controller@insert')->middleware("auth");

//route for Edit And Update
Route::GET("car/{car_id}",'Controller@edit')->middleware("auth");
Route::GET("car/delete/{car_id}",'Controller@delete')->middleware("auth");
Route::PUT("/car/{car_id}/",'Controller@update')->middleware("auth");
/*
Route::middleware(['auth'])->group(function () {

        Route::get("addcar",'Controller@addcar')->middleware("auth");

        Route::post("insert",'Controller@insert')->middleware("auth");

    //route for Edit And Update
        Route::GET("car/{car_id}",'Controller@edit')->middleware("auth");
        Route::PUT("/car/{car_id}/",'Controller@update')->middleware("auth");

});
*/

require __DIR__.'/auth.php';
