<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  public function owner() {
    return $this -> belongsTo('App\User');
  }

  public function application_data() {
    return $this -> hasMany('App\ApplicationData');
  }

  public function application_keys() {
    return $this -> hasMany('App\ApplicationKey');
  }

  protected $fillable = [
    'name', 'description'
  ];
}
