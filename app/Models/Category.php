<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The posts that belong to category.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
