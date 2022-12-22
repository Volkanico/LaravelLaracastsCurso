<?php
//CLASE DE LARAVEL LARACASTS CAPITULO 11
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post {

    public $title;
    public $exercpt;
    public $date;
    public $body;

    public function __construct($title,$exercpt,$date,$body){
        $this->title = $title;
        $this->exercpt = $exercpt;
        $this->date = $date;
        $this->body = $body;
    }
    

    public static function all(){

        $files =  File::files(resource_path("posts/"));


        return array_map(function ($file){
            
            return $file->getContents();
        }, $files);
    }

    public static function find($slug){
        
        if(!file_exists($path  = resource_path("posts/{$slug}.html"))){
            throw new ModelNotFoundException();
           // abort(404);
        }
        
        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }
}


?>