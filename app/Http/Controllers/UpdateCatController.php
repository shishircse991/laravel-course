<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UpdateCatController extends Controller
{
    public function UpdateCategory(Request $request,$id)
    {
    	 $validatedData = $request->validate([
	        'name' => 'required|max:50|min:3',
	        'slug' => 'required|max:50|min:3',
    	]);


    	$data=array();
    	$data['name']=$request->name;
    	$data['slug']=$request->slug;
    	$category=DB::table('categories')->where('id',$id)->update($data);
    	if ($category) {
    		$notification=array(
    			'messege'=>'Successfully Category Updated!', 'alert-type'=>'success');
    		return Redirect()->route('all.category')->with($notification);
    	}
    	else {
    		$notification=array(
    			'messege'=>'Nothing to update', 'alert-type'=>'error');
    		return Redirect()->back()->with($notification);
    	}
    }
}
