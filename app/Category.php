<?php

namespace App;

use App\receipe;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table ="Category";
   protected $fillable = ['name','description'];

   public function receipe()
    {
        return $this->hasMany(receipe::class);
    }
}
