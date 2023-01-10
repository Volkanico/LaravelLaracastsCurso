<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //GUARDA TOTS ELS ATRIBUTS EXCEPTE ELS QUE LI PASSAM
    // protected $fillable = ['title','excerpt','body','id']; GUARDA TOTS ELS ATRIBUTS QUE LI PASSAM
    public function getRouteKey()
    {
        return 'slug';
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
