<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Relación 1:N inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //Relación N:N Posts:Tags
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //Relación 1:1 polimórfica
    public function image() {
        return $this->morphOne(Image::class,'imageable');
    }
}

