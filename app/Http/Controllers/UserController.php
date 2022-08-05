<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    function login_get(){
        return view("client.login");
    }

    function login_post (Request $request)
    {

<<<<<<< HEAD
=======

//        if (is_numeric($request->get('email'))) {
//            return ['phone' => $request->get('email'), 'password' => $request->get('password')];
//        } elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
//            return ['email' => $request->get('email'), 'password' => $request->get('password')];
//        }
//        return ['username' => $request->get('email'), 'password' => $request->get('password')];
>>>>>>> fac3844f5668d5e1c0fab0698172d34496bffa13

        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password'],'roles'=> 0]))
        {
            return redirect("/profile")->with([
                "message" => "شما با موفقیت وارد شدید"
            ]);
        } elseif (Auth::attempt(['mobile' => $request['email'], 'password'=>$request['password'],'roles'=> 0 ])){
            return redirect("/profile")->with([
                "message" => "شما با موفقیت وارد شدید"
            ]);
        }
        else{
            return redirect("/login")->with([
                "message" => "ایمیل یا گذرواژه صحیح نمی باشد"
                ]);
        }


    }

    function register_get(){
        $cities = City::all();

        return view("client.register")->with([
           "cities" => $cities
        ]);
    }

    function register_post(Request $request){
        
             $this->validate($request, [
            'email' => 'required|unique:users',
            'name' => 'required|max:120',
            'password' => 'required|min:8',
            'password_confirmation' => 'same:password'
        ]);

        $this->validate($request, [
            'email' => 'required|unique:users',
            'name' => 'required|max:120',
            'password' => 'required|min:3',
            'password_confirmation' => 'same:password'
        ]);


        $new_user = new User();
        $new_user->name = $request["name"];
        $new_user->username = $request["username"];
        $new_user->mobile = $request["mobile"];
        $new_user->email = $request["email"];
        $new_user->city_id = $request["city"];
        $new_user->adress = $request["address"];
        $new_user->roles = 0;
        $new_user->password = bcrypt($request["password"]);
        $new_user->save();

        return redirect("/login");
    }


    function logout(){
        Auth::logout();
        return redirect("/login");
    }


    function edit(){

    }

    function delete(){

    }

    function profile(){
        return view("client.profile");
    }





}
