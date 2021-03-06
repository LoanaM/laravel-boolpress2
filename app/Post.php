<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'content'];

    public function categories()
    {
      return $this->belongsToMany('App\Category'); //qua aggiungere anche la tabella se non fosse mappata correttamente

    }
}
