<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = ['id'];
    public function paper()
    {
        return $this->hasOne(Paper::class, 'author_id', 'id');
    }
}
