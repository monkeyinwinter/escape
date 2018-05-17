<?php

namespace App\Http\Controllers;
use App\Region;
use App\Departement;
use App\Spot;
use View;

class SpotController extends Controller {

    public function index() {
        $spot = Spot::paginate(10);
        return View::make('choix_site.choix_departement', compact('spot'));
    }

    public function view($spot){
        $spot = Spot::where('spot', $spot)->firstOrFail();
        return View::make('spot.spotView', compact('spot'));
    }

}
