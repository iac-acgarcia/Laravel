<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
      //Relación N:N Posts:Tags
      public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
