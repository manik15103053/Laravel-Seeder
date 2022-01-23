<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(Request $request){
    $category = $request->input('search');
    $posts = Post::where('title','LIKE','%'.$category.'%')->get();

    //    $posts = Post::latest()->get();
      //dd($posts->all());
       return view('user.index',compact('posts'));
   }
//    public function search(Request $request){
//         $category = $request->input('search');
//         $posts = Post::where('title','LIKE','%'.$category.'%')
//                         ->orWhere('name','LIKE','%'.$category.'%')->with('category')->get();
//         return view('user.search',compact('posts'));


//    }
}
