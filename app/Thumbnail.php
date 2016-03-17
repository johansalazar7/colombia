<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
   
2
protected $table = 'thumbnails';
protected $fillable = ['name', 'image'];
}
