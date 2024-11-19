<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Post extends Model

{
    
    use HasFactory;

    protected $fillable = [
        'title',
        'username',
        'email',
        'description',
        'category',
        'image_url',
        'location',
    ];
    
    public function interactions()
    {
        return $this->hasMany(PostInteraction::class);
    }

}
