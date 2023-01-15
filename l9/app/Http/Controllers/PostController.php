<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Validation\Rule as ValidationRule;

class PostController extends Controller
{
    
    public function index(){
        
            return view('posts.index',[
                'posts' => Post::latest()->filter(
                    request(['search', 'category', 'author']))->paginate(6)->withQueryString()
            ]); 
        /*return Post::latest()->filter(
        request(['search', 'category', 'author']))->paginate(); 
        MOSTRAMO UN JSON ORDENAT, AMB PAGINATE PODEM POSAR UN NOMBRE DE PAGINES I ES REPARETIXEN ELS POSTS*/
        /*return Post::latest()->filter(
            request(['search', 'category', 'author']))->get();
            MOSTRAM UN JSON PER PANTALLA (ARRAY)*/


        /*return view('posts.index',[
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author']))->get()
        ]); 
        MOSTRAM TOTA LA LLISTA EN VIEW INDEX */
       
    }

    public function show(Post $post){
        return view('posts.show', [
            'post' =>  $post
        ]);
    }

    public function create(){
        
        return view('posts.create');
    }
    public function store(){
        
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required',ValidationRule::unique('posts','slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required',ValidationRule::exists('categories', 'id')],
        ]);

        $attributes['user_id'] = auth()->id();

        Post::create($attributes);
        return redirect('/');
    }
    
}
