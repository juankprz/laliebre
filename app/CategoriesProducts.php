<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesProducts extends Model
{
  protected $guarded = [];

  public function productos()
  {
    return $this->hasMany(Products::class);
  }
}
