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

Route::get('/myblog', function () {
    return view('OwnWelcome');
});

Route::get('/posts', function () {
    return view('posts');
});
/*
Route::get('post', function () {
    return view('post',[
        'post' => '<h1>Hello World</h1>'
    ]);
});
*/
/*
Route::get('post', function () {

    $post = file_get_contents(__DIR__ . '/../resources/posts/SecondPost.html');
    return view('post',[
        'post' => $post
    ]);
});
*/
/*
Route::get("posts/{post}", function ($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    
    if(! file_exists($path)){
        return redirect('/posts');
       // abort(404);
    }
    
    $post = file_get_contents($path);
    return view('post',[
        'post' => $post
    ]);
})->where('post','[A-z_\-]+'); //REGEX: Permet 1 o mes lletres de A a z (min i maj) i els guions '-'
*/
/*
Route::get("posts/{post}", function ($slug) {
    
    if(! file_exists($path  = __DIR__ . "/../resources/posts/{$slug}.html")){
        return redirect('/posts');
       // abort(404);
    }
    
    $post = cache()->remember("posts.{$slug}", now()->addHour(1),function() use ($path){
        return file_get_contents($path);
    });
    
    return view('post',[
        'post' => $post
    ]);
})->where('post','[A-z_\-]+'); //REGEX: Permet 1 o mes lletres de A a z (min i maj) i els guions '-'
*/


?>