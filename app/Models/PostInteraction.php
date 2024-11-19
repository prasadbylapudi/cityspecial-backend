<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class PostInteraction extends Model
{
    //
     use HasFactory;

    protected $fillable = [
        'post_id',
        'user_identifier',
        'type',
    ];

    // Define relationship with Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
