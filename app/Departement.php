<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model {

    protected $guarded = array('id','updated_at','created_at');

    public function region() {
      return $this->belongsTo('App\Region');
    }
    public function spots() {
      return $this->hasMany('App\Spot');
    }
}
