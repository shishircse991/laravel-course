<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewCatController extends Controller
{
    public function ViewCategory($id)
    {
    	$category=DB::table('categories')->where ('id', $id)->first();
    	// return response()->json($category);
    	return view('post.categoryview')->with('category', $category);
    }
}
