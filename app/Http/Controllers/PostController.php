<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function StorePost(Request $request)
    {
    	$validatedData = $request->validate([
	        'title' => 'required|max:150',
	        'details' => 'required|max:500',
	        'image' => 'mimes:jpeg,jpg,png,gif|required|max:1000',

    	]);

    	$data=array();
    	$data['title']=$request->title;
    	$data['category_id']=$request->category_id;
    	$data['details']=$request->details;
    	$image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name. '.' .$ext;
    		$upload_path='public/frontend/postimage/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		$data['image']=$image_url;
    		DB::table('posts')->insert($data);
    		$notification=array(
    			'messege'=>'Successfully Post Inserted!', 'alert-type'=>'success');
    		return Redirect()->back()->with($notification);

    	} else{

    		DB::table('posts')->insert($data);
    		$notification=array(
    			'messege'=>'Successfully Post Inserted!', 'alert-type'=>'success');
    		return Redirect()->back()->with($notification);
    	}
    }
}
