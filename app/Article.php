<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{

  public function book()
    {
        return $this->hasMany('App\Models\Comment');
    }

}
