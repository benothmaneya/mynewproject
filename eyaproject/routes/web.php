<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/store', function () {
   $filter= request ('style');
   if (isset($filter)){
   return 'this page is viewing<span style ="color:red">'.strip_tags($filter).'</span>';
   }
   return 'this page is viewing<span style ="color:red">All products</span>';


   
});
*/
/*
Route::get('/store/{category?}/{items?}', function ($category=null,$items=null) {
    if(isset($category)){
        if(isset($items)){
            return'<h1>'.$items.'</h1>';
        }
     return'<h1>'.$category.'</h1>';
    }
    return '<h1>STORE</h1>';
    Route::get('/store', [FirstController::class,'index']);
});
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about/about',function() {
    return view ('about');
});
Route::get('/contact', function () {
    return view('contact');
});


