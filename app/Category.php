<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'body'
    ];

    /**
     * @return mixed
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
