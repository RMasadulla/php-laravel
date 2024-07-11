<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    function getUser($name) {
        return $name;
    }

    function getNewPage($name) {
        // return view("admin.login");
        return view("admin.login" , ['name'=>$name]);
    }

    function userProfile() {
       if(view::exists("user.profile")){
        return view("user.profile");
       }else{
        echo "user not found";
       }
    }
}
