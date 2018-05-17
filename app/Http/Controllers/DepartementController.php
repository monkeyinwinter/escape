<?php

namespace App\Http\Controllers;

use App\Region;
use App\Departement;
use App\Spot;
use View;

class DepartementController extends Controller {

    public function index() {
        $departement = Departement::paginate(10);
        return View::make('choix_site.choix_departement', compact('departement'));
    }

    public function view($departement){
        $departement = Departement::where('departement', $departement)->firstOrFail();
        return View::make('choix_site.choix_spot', compact('departement'));
    }

}
