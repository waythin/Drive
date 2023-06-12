<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/index',[DriverController::class, 'index']);


//registration 
Route::get('/registration',[DriverController::class, 'create']);
Route::post('/registration',[DriverController::class, 'store']);



//edit 
Route::get('/index/edit/{id}',[DriverController::class, 'edit'])->name('edit');
// ->middleware(DriverAuth::class);
Route::post('/index/edit/{id}',[DriverController::class, 'update'])->name('update');
// ->middleware(DriverAuth::class);


//delete
Route::get('/delete/{id}',[DriverController::class, 'delete'])->name('delete');