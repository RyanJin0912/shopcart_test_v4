<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath','title','description','price'];//[1,2,3,4] -> all()


}
