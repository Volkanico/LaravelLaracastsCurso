<?php
use App\Models\Post;
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
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/myblog', function () {
    return view('OwnWelcome');
});



Route::get('/posts', function () {
    return view('posts',[
        'posts' => Post::all()
    ]);
});


Route::get('posts/{post}', function ($slug) {
    //Find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => Post::find($slug)
    ]);
    
})->where('post','[A-z_\-]+'); //REGEX: Permet 1 o mes lletres de A a z (min i maj) i els guions '-'

//NOS HEMOS QUEDADO EN EL EPISODIO 8/11