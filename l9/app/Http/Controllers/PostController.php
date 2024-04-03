<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Auth\Access\Gate;
use Illuminate\Validation\Rule as ValidationRule;

class PostController extends Controller
{
    public function index(){
       //dd("HOLA");
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
}
