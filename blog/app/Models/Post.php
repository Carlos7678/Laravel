<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titulo', 'contenido'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

