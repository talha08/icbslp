<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    protected $guarded = ['id'];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
