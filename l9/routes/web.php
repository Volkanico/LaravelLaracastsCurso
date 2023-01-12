<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

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
Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/myblog', function () {
    return view('OwnWelcome');
});
*/


Route::get('/', function () {
/*\Illuminate\Support\Facades\DB::listen(function ($query) {
    logger($query->sql,$query->bindings);
});*/
        return view('posts',[
            'posts' => Post::latest()->get()
        ]);
    
});


Route::get('/posts/{post:slug}', function (Post $post) {
    
    return view('post', [
        'post' =>  $post
    ]);
    
}); //REGEX: Permet 1 o mes lletres de A a z (min i maj) i els guions '-'

//PER ELIMINAR LA CACHE DE LES VISTES CARREGADES cache()->forget('posts.all');

Route::get('/categories/{category:slug}', function (Category $category) {
    
    return view('posts', [
        'posts' =>  $category->posts
    ]);
    
});

Route::get('/authors/{author:username}', function (User $author) {
    
    return view('posts', [
        'posts' =>  $author->posts,
        
    ]);
    
});