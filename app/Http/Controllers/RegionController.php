<?php

namespace App\Http\Controllers;

use App\Region;
use App\Departement;
use View;

class RegionController extends Controller {

    public function index() {
        $regions = Region::paginate(15);
        return View::make('region.regionIndex', compact('regions'));
    }

    public function view($region){
        $region = Region::where('region', $region)->first();
        $departements = Departement::with('region')->get();

      //  $departements = Departement::where('region_id',[])->get();
        return View::make('region.regionView', compact('region','departements'));
    }

}
