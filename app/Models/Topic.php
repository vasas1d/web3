<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];
    // egy topicon belül több post is lehet 1:N
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
