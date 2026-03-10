<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [PageController::class, 'showHome']);
// Route::get('/user', [PageController::class, 'showUser']);































// Route::get('/post', function () {
//     return view('post');
// });


//second method
//Route::view('/post', 'post');



//parameterized route
// Route::get('/post/{id?}', function ($id = null) {
//     if($id){
//         return "<h1>Post id is:".$id."</h1>";
//     }else{
//     return "<h1>No post id provided</h1>";
//     }
// });
