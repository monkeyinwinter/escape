<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model {

    protected $guarded = array('id','updated_at','created_at');

    public function departements(){
      return $this->hasMany('App\Departement');
    }
}
