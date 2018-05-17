<?php
namespace App;

use Eloquent;

class Spot extends Eloquent {

    protected $guarded = array('id','updated_at','created_at');

    public function departement() {
      return $this->belongsTo('App\Departement', 'id');

    }

}
