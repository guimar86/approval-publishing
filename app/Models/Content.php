<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //

    protected $fillable = [
        'id',
        'title',
        'body',
        'status',
        'author_id',
        'reviewer_id',
        'published_at',
        'created_at',
        'updated_at'
    ];
}
