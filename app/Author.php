<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = ['id'];
    public function papers()
    {
        return $this->hasMany(Paper::class, 'author_id', 'id');
    }
}
