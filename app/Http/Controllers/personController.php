<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personController extends Controller
{
    function addNewUser(Request $req) {

        // $req->validate([
        //     'name'=>'required | min:3 | max:10 ' ,
        //     'email'=>'required | email',
        //     'skill'=>'required',
        //     'msg'=>'required | max:150 ',
        // ]);


        // for custom error message show

        // $req->validate([
        //     'name'=>'required | min:3 | max:10 ' ,
        //     'email'=>'required | email',
        //     'skill'=>'required',
        //     'msg'=>'required | max:150 ',
        // ], [
        //     'name.required'=>'Enter your valid name',
        //     'name.min'=>'You should be enter min char 3',

        // ]);

        // validation rule and custom error message showing
        $req->validate([
            'name'=>' uppercase ' ,
        ], [
            'name.uppercase'=> 'All char must be uppercase',
        ]);
        
        return $req;

        // for array 
        // print_r($req->skill);
    }
}
