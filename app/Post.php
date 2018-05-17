<?php
namespace App;

use Eloquent;

class Post extends Eloquent {

    protected $guarded = array('id','updated_at','created_at');

}