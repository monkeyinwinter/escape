<?php

namespace App\Http\Controllers;

use App\Departement;
use View;

class DepartementController extends Controller {

    public function index() {
        $departement = Departement::paginate(10);
        return View::make('departement.departementIndex', compact('departement'));
    }

    public function view($departement){
        $departement = Departement::where('departement', $departement)->firstOrFail();
        return View::make('departement.departementView', compact('departement'));
    }

}