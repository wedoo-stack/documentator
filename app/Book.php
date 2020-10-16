<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{

  public function articles()
    {
        return $this->belongsTo('App\Models\Book');
    }

}
