<?php

namespace App\Http\Controllers;

use App\Region;
use App\Departement;
use App\Spot;

use View;

class RegionController extends Controller {

    public function index() {
        $regions = Region::paginate(15);
        return View::make('choix_site.choix_region', compact('regions'));
    }

    public function view($region){
        $region = Region::where('region', $region)->first();
        $departements = Departement::with('region')->get();
        return View::make('choix_site.choix_departement', compact('region','departements'));
    }

    public function new($region,$departement){
        $region = Region::where('region', $region)->first();
        $departement = Departement::where('departement', $departement)->first();
        $spots = Spot::with('departement')->get();

        return View::make('choix_site.choix_spot', compact('region','departement','spots'));
    }


}
