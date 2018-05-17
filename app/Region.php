<?php
namespace App;

use Eloquent;

class Region extends Eloquent {

    protected $guarded = array('id','updated_at','created_at');

    public function departements(){
      return $this->hasMany('App\Departement', 'region_id', 'id');

    }

}
