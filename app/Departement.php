<?php
namespace App;

use Eloquent;

class Departement extends Eloquent {

    protected $guarded = array('id','updated_at','created_at');

    public function region() {
      return $this->belongsTo('App\Region', 'id');
    }
    public function spots() {
      return $this->hasMany('App\Spot', 'departement_id', 'id');
    }
}
