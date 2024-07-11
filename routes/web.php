<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\personController;

Route::get('/', function () {
    return view('home');
});

Route::get("/user/{name}", [UserController::class, 'getUser']);
Route::get("/admin/{name}", [UserController::class, 'getNewPage']);

Route::get("/user-profile", [UserController::class, 'userProfile']);

Route::view("/about", 'about');


Route::get('/about/{name}', function($name){

    $userData = ['rakib', 'asif', 'sunil'];

    return view("about", ["user"=>$name , 'users'=>$userData]);
});


// form-data-submit
Route::view("/add-new-user", 'user.user-form');
Route::post("/add-new", [personController::class, "addNewUser"]);