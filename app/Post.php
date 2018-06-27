<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function categories()
    {
      return $this->belongsToMany('App\category'); //qua aggiungere anche la tabella se non fosse mappata correttamente
      
    }
}
