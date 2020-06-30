<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('pages.index');
// });


Route::get('/', 'HelloController@Index');


Route::get('about/us', 'AboutController@index')->name('about');

Route::get('contact/us', 'ContactController@index')->name('contact');

Route::get('all/category', 'AllCatController@AllCategory')->name('all.category');

Route::get('add/category', 'CategoryController@AddCategory')->name('add.category');

Route::post('store/category', 'StoreCatController@StoreCategory')->name('store.category');
Route::get('view/category/{id}', 'ViewCatController@ViewCategory');
Route::get('delete/category/{id}', 'DeleteCatController@DeleteCategory');
Route::get('edit/category/{id}', 'EditCatController@EditCategory');
Route::post('update/category/{id}', 'UpdateCatController@UpdateCategory');
// posts crud are here
Route::get('write/post', 'WritepostController@newPost')->name('write.post');
Route::post('store/post', 'PostController@StorePost')->name('store.post');
Route::get('all/post', 'AllPostController@AllPost')->name('all.post');
Route::get('view/post/{id}', 'ViewPostController@ViewPost');
Route::get('edit/post/{id}', 'EditPostController@EditPost');
Route::post('update/post/{id}', 'UpdatePostController@UpdatePost');
Route::get('delete/post/{id}', 'DeletePostController@DeletePost');
