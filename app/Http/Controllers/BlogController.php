<?php

namespace App\Http\Controllers;
use App\Post;


use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index(){
    $posts = Post::where('published', 1)->get();
    return view('admin.posts.index', ['posts'=> $posts]);
   }
}
