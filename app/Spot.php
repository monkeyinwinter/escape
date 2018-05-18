<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model {

    protected $guarded = array('id','updated_at','created_at');

    public function departement() {
      return $this->belongsTo('App\Departement');

    }

}
