<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status',
        'publish',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function commentaires()
    {
        return $this->belongsToMany(User::class, 'commentaires');
    }
}
