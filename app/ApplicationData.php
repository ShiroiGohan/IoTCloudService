<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationData extends Model
{
    public function application() {
      return $this -> belongsTo('App\Application');
    }

    protected $fillable = [
      'name', 'description', 'pattern_array'
    ];

    protected $table = 'application_data_items';
}
