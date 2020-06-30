<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EditPostController extends Controller
{
    public function EditPost($id)
    {
    	$category=DB::table('categories')->get();
    	$post=DB::table('posts')->where('id', $id)->first();
    	return view('post.editpost', compact('category', 'post'));
    }
}
