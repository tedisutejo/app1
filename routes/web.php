<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware;


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
    return view('index');
});

//Login
Route::get('/login',[UsersController::class, 'login'])->name('login');
Route::post('/postlogin',[UsersController::class, 'postlogin']);

//Registration
Route::get('/registration',[UsersController::class, 'registration']);
Route::post('/registration',[UsersController::class, 'postregistration']);

Route::group(['middleware' => ['auth','checklevel:admin']], function (){
    //Student
    Route::get('/students',[StudentsController::class, 'index']);  
    Route::get('/students/create',[StudentsController::class, 'create']);
    Route::get('/students/{student}',[StudentsController::class, 'show']);
    Route::post('/students',[StudentsController::class, 'store']);
    Route::delete('/students/{student}',[StudentsController::class, 'destroy']);
    Route::get('/students/{student}/edit',[StudentsController::class, 'edit']);
    Route::patch('/students/{student}',[StudentsController::class, 'update']);
});

Route::group(['middleware' => ['auth','checklevel:admin,user']], function (){
    Route::get('/dashboard', [UsersController::class, 'dashboard']);
    Route::get('/logout',[UsersController::class, 'logout']);
});