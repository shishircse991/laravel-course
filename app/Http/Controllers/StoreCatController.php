<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StoreCatController extends Controller
{
    public function StoreCategory(Request $request)
    {
    	 $validatedData = $request->validate([
	        'name' => 'required|unique:categories|max:50|min:3',
	        'slug' => 'required|unique:categories|max:50|min:3',
    	]);


    	$data=array();
    	$data['name']=$request->name;
    	$data['slug']=$request->slug;
    	$category=DB::table('categories')->insert($data);
    	if ($category) {
    		$notification=array(
    			'messege'=>'Successfully Category Inserted!', 'alert-type'=>'success');
    		return Redirect()->route('all.category')->with($notification);
    	}
    	else {
    		$notification=array(
    			'messege'=>'Something went wrong', 'alert-type'=>'error');
    		return Redirect()->back()->with($notification);
    	}


    }
}
