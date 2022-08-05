<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        return view("admin.index");
    }


    function login_get(){
        return view("admin.login");
    }

    function login_post (Request $request)
    {

        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password'],'roles'=> 1]))
        {
            return redirect("/admin")->with([
                "message" => "شما با موفقیت وارد شدید"
            ]);
        } elseif (Auth::attempt(['mobile' => $request['email'], 'password'=>$request['password'],'roles'=> 1 ])){
            return redirect("/admin")->with([
                "message" => "شما با موفقیت وارد شدید"
            ]);
        }
        else{
            return redirect("/admin/login")->with([
                "message" => "ایمیل یا گذرواژه صحیح نمی باشد"
            ]);
        }


    }

    function logout(){
        Auth::logout();
        return redirect("/admin/login");
    }

}
