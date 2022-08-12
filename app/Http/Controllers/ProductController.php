<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    function get($id){
        $product = Product::find($id);

        return view("product",[
            'product' => $product

        ]);
    }

    function add_get(){

        $categories = Category::all();

        return view("admin.add_product",[
            "categories" => $categories
        ]);
    }

    function add_post(Request $request){
        $new_product=new Product();
        $new_product->name=$request["name"];
        $new_product->price=$request["price"];
        $new_product->count=$request["count"];

        $new_product->description=$request["description"];
        $new_product->category_id=$request["category_id"];
        $new_product->price_off=$request["priceOff"];
        $new_product->save();

        $new_image = new Image();
        $new_image->url =$request["image"];

        $new_product->images()->save($new_image);

        $message = "محصول جدید اضافه شد";
        $message_type = "success";
        return redirect("/admin/productsList")->with([
            "message" => $message,
            "message_type" => $message_type
        ]);
    }

    function edit_get($id){
        $product=Product::find($id);
        $categories = Category::all();
        return view("admin.edit_product",[
            "product"=>$product,
            "categories" => $categories

        ]);
    }

    function edit_post(Request $request){

        $product=Product::find($request["id"]);
        $product->name=$request["name"];
        $product->description=$request["description"];
        $product->price=$request["price"];
        $product->price_off=$request["priceOff"];
        $product->category_id=$request["category_id"];
        $product->count=$request["count"];
        $product->update();

        $message = "محصول جدید با موفقیت ویرایش  شد";
        $message_type = "success";
        return redirect("/admin/productsList")->with([
            "message" => $message,
            "message_type" => $message_type
        ]);
    }

    function delete($id){

        $product = Product::find($id);

        if (!$product)
        {
            $message = "پیدا نشد";
            $message_type = "danger";
        }
        else{
            $product->delete();
            $product->images()->delete();
            $message = "با موفقیت حذف شد";
            $message_type = "success";

        }

        return redirect("/admin/productsList")->with([
            "message" => $message,
            "message_type" => $message_type
        ]);

    }

    function get_all(){

        $products =  Product::all();

        return view("products",[
            "products" =>$products,
        ]);

    }

    function get_all_admin(){

        $products =  Product::all();

        return view("admin.products_list",[
            "products" =>$products,
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
