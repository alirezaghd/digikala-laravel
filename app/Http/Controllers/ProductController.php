<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function get($id){
        $product = Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url'])->find($id);

        return view("product",[
            'products' =>$product,

        ]);
    }

    function add(){

    }

    function edit(){

    }

    function delete(){

    }

    function getall(){
        $products =  Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url']);
//        $products_id = Product::first()->id;

//        $image= Image::where('product_id','=',$products_id)->first();

        return view('products',[
            'products' =>$products,
//            'image' =>$image
        ]);

    }






    function get_by_category(){

    }

    function comments(){

    }

    function like(){

    }

    function search(){

    }

    function information(){

    }


}
