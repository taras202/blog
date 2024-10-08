<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'avtor_id',
        'post_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'avtor_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
