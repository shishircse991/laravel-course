<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewPostController extends Controller
{
    public function ViewPost($id)
    {
	    $post=DB::table('posts')
	   	->join('categories', 'posts.category_id', 'categories.id')
	   	->select('posts.*', 'categories.name')
	   	->where('posts.id',$id)
	   	->first();
	   	// return response()->json($post);
	   	return view('post.viewpost', compact('post'));
	}
}
