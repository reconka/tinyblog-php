<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App
 */
class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * @return mixed
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
