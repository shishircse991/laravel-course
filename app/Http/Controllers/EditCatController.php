<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EditCatController extends Controller
{
    public function EditCategory($id)
    {
    	$category=DB::table('categories')->where('id', $id)->first();
    	return view('post.editcategory',compact('category'));
    }
}
