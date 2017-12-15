<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  public function owner() {
    return $this -> belongsTo('App\User');
  }

  protected $fillable = [
    'name', 'description'
  ];
}
