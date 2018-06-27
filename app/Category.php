<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name','slug'];


    public function posts()
    {
      return $this->belongsToMany('App\post'); //qua aggiungere anche la tabella se non fosse mappata correttamente
      
    }
}
