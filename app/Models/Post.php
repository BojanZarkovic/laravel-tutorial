<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope('deleted', function (Builder $builder) {
            $builder->where('deleted', 0);
        });
    }

    public static function boot()
    {
        parent::boot();

        self::saving(function($model){
            $numberOfPostsWithSameTitle = Post::where('title', $model->title)->count();

            if ($numberOfPostsWithSameTitle) {
                $model->slug = Str::slug($model->title, '-') . '-' . $numberOfPostsWithSameTitle;
            } else {
                $model->slug = Str::slug($model->title, '-');
            }
        });
    }

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The categories that post belongs to.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


}
