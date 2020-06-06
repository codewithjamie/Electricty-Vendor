<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discos extends Model
{
  protected $fillable = [
    'name', 'locations', 'slug', 'image', 'discount', 'commission', 'posted-by', 'description',
  ];
}
