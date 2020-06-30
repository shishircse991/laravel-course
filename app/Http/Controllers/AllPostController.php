<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllPostController extends Controller
{
   public function AllPost()
   {
   	// $post=DB::table('posts')->get();
   	$post=DB::table('posts')
   	->join('categories', 'posts.category_id', 'categories.id')
   	->select('posts.*', 'categories.name')
   	->get();
   	return view('post.allpost', compact('post'));
   }
}
