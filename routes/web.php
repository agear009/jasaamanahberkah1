<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\LoginuserController;

use App\Models\About;




Route::get('/', function () {

            $Abouts = About::all();
            return view('index.index',["title"=>"home","active"=>"index"],compact('Abouts'));
        })->name('login')->middleware('guest');

Route::get('/login-jasa-amanah', function () {
            return view('login.index',["title"=>"home","active"=>"index"]);
        })->name('login')->middleware('guest');

Route::get('/loginuser', function () {
            return view('login.login',["title"=>"home","active"=>"login"]);
            })->name('login')->middleware('guest');


Route::resource('/index',\App\Http\Controllers\IndexController::class);
Route::post('/login',  [LoginController::class,'autenticate']);
Route::post('/loginusercek',  [LoginUserController::class,'autenticate']);
Route::post('/logout',  [LoginController::class,'logout']);
Route::post('/logoutuser',  [LoginUserController::class,'logout']);
Route::resource('/register',\App\Http\Controllers\UserController::class);
Route::resource('/searchs', \App\Http\Controllers\SearchController::class);



Route::group(["middleware"=>["auth"]],function(){
Route::resource('/abouts', \App\Http\Controllers\AboutController::class);
Route::resource('/dashboardindexs', \App\Http\Controllers\DashboardIndexController::class);
Route::get('/dashboard',  [DashboardController::class,'index']);
Route::resource('/jasas', \App\Http\Controllers\JasaController::class);
Route::resource('/trackers', \App\Http\Controllers\TrackerController::class);
Route::resource('/users',\App\Http\Controllers\UserAdminController::class);

});
