<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function AddCategory()
   {

   	return view('post.add_category');

   }
}
