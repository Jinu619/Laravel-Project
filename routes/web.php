<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileSettingController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\todosController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login/google',[GoogleController::class,'loginUsingGoogle'])->name('google.login');
Route::get('login/google/callback',[GoogleController::class,'handleGoogleCallback']);


Route::resource('/',LoginController::class);
Route::resource('/register',RegisterController::class);

Route::group(['middleware'=>'user_auth'],function (){
    //logout
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    //dashboard
    Route::resource('/dashboard',DashboardController::class);

    //Notes
    Route::resource('/notes',NotesController::class);

    //Tasks
    Route::resource('/tasks',TaskController::class);
    Route::POST('/tasks/{id}',[TaskController::class,'changestatus']);
    Route::GET('/alltasks',[TaskController::class,'viewall']);

    //profile
    Route::resource('/profile',ProfileController::class);

    //setting 
    Route::resource('/setting',ProfileSettingController::class);
    Route::POST('/changeemail',[ProfileSettingController::class,'changeemail']);
    Route::POST('/changepassword',[ProfileSettingController::class,'changepassword']);

    //project
    Route::resource('/projects',ProjectController::class);
    Route::GET('/project_view/{id}',[ProjectController::class,'show']);

    //todos
    Route::resource('/todos',todosController::class);
    Route::post('/todos/{id}',[todosController::class,'changestatus']);
});