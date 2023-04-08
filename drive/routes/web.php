<?php

use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//registration 
Route::get('/registration',[DriverController::class, 'create']);
Route::post('/registration',[DriverController::class, 'store']);


//List index 
Route::get('/index',[DriverController::class, 'index'])->name('index');

//edit 
Route::get('/edit/{id}',[DriverController::class, 'edit']);
Route::post('/update/{id}',[DriverController::class, 'update']);


//delete
Route::post('/delete/{id}',[DriverController::class, 'delete']);



Route::get('/first',function(){
    return "getiing it";
});

