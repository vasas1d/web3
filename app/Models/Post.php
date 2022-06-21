<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'topic_id', 'author_id', 'content'];

    public function topic() {
        return $this->belongsTo(Topic::class); //akt. a topichoz tartozik
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }
}
