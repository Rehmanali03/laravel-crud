<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\register;

class UserController extends Controller
{
    function test(Request $req){
        if($req->password == $req->retypePassword){
            // echo $req->name;
            // echo $req->email;
            // echo $req->password;
            $register = new register();

            $register->name = $req->name;
            $register->email = $req->email;
            $register->password = $req->password;
            $register->save();

        //    return redirect('login');
        }else{
            echo "Password And Retype Password Must Be Same";
        }
    }
}
