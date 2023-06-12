<?php

use App\Http\Controllers\DriverController;
use App\Http\Middleware\DriverAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Psy\Command\ListCommand\FunctionEnumerator;

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
Route::get('/registration',[DriverController::class, 'create'])->name('registration');
Route::post('/registration',[DriverController::class, 'store']);

//login
Route::get('/login', [DriverController::class, 'login'])->name('login');
Route::post('/login', [DriverController::class, 'loginCheck']);

//logout
Route::get('/logout',[DriverController::class,'logout'])->name('logout');

//List index 
Route::get('/index',[DriverController::class, 'index'])->name('index')->middleware(DriverAuth::class);

//edit 
Route::get('/index/edit/{id}',[DriverController::class, 'edit'])->name('edit')->middleware(DriverAuth::class);
Route::post('/index/edit/{id}',[DriverController::class, 'update'])->name('update')->middleware(DriverAuth::class);

//show profile

Route::get('/dope', function(){
    return view("dope");
})->middleware(DriverAuth::class);


//delete
Route::get('/delete/{id}',[DriverController::class, 'delete'])->name('delete');



Route::get('/first',function(){
    return "getiing it";
});



Route::get('/demo',function(){
    return view('demo');
});


Route::get('/pr',function(){
    return view('pr');
});


