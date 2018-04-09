<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Articles()
    {
        return $this->hasMany('App\Article', 'article_id');
    }
}
