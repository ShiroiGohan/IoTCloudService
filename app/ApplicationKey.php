<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationKey extends Model
{
  public function application() {
    return $this -> belongsTo('App\Application');
  }

  protected $fillable = [
    'name', 'usage'
  ];
}
