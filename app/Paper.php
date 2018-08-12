<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $guarded = ['id'];
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
