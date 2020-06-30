<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WritepostController extends Controller
{
    public function newPost()
    {
    	$category=DB::table('categories')->get();
    	return view('post.writepost', compact('category'));
    }
}
