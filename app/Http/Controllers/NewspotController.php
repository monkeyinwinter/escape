<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewspotController extends Controller
{

    public function getSpot()
    {
		return view('getNewSpot');
	}

	public function postSpot(Request $request)
	{
		return 'Votre nouveau spot est ' . $request->input('nouveauspot');
	}

}
