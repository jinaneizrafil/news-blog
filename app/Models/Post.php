<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
        'date' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags')->withTimestamps();
    }
}
