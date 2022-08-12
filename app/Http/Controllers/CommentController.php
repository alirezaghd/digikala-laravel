<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    function send_comment(Request $request){

        $new_comment = new Comment();
//        $user_id= Session::get("user_id");

        $new_comment->user_id = Auth::id();
        $new_comment->product_id = $request["product_id"];
        $new_comment->text = $request["text"];
        $new_comment->save();

        }
}
