<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $products = Product::all();

        return view("index",[
            "products" => $products
        ]);
    }

    function contact_us(){

    }

    function about_us(){

    }

    function faq(){

    }

    function jobs(){

    }
}
