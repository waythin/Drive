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

//login
Route::get('/login', [DriverController::class, 'login']);
Route::post('/login', [DriverController::class, 'loginConfirm']);

//List index 
Route::get('/index',[DriverController::class, 'index'])->name('index');

//edit 
Route::get('/index/edit/{id}',[DriverController::class, 'edit'])->name('edit');
Route::post('/index/edit/{id}',[DriverController::class, 'update'])->name('update');


//delete
Route::get('/delete/{id}',[DriverController::class, 'delete'])->name('delete');



Route::get('/first',function(){
    return "getiing it";
});

