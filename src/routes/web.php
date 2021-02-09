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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

# Route::get('/posts/{post}', function ($post) {
#     // return view('post');
#   // return $post;
#   $posts = [
#     '1' => '11',
#     '2' => '22'
#   ];
# 
#   if (! array_key_exists($post, $posts)) {
#     abort(404, 'Sorry, that post was not found.');
#   }
# 
#   return view('post', [
#     // 'post' => $posts[$post] ?? 'Nothing here yet.'
#     'post' => $posts[$post]
#   ]);
# });

Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');

