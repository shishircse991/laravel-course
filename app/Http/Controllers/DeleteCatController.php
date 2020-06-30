<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DeleteCatController extends Controller
{
    public function DeleteCategory($id)
    {
    	$delete=DB::table('categories')->where ('id', $id)->delete();
    		$notification=array(
    			'messege'=>'Successfully Category Deleted!', 'alert-type'=>'success');
    		return Redirect()->route('all.category')->with($notification);
    }
    	
}
