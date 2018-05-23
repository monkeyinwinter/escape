<?php

namespace App\Http\Controllers;
use App\Region;
use App\Departement;
use App\Spot;
use View;

use App\Http\Requests\SpotRequest;
use App\Repositories\SpotRepositoryInterface;

class SpotController extends Controller {

    public function index() {
        $spot = Spot::paginate(10);
        return View::make('choix_site.choix_departement', compact('spot'));
    }

    public function view($spot){
        $spot = Spot::where('spot', $spot)->firstOrFail();
        return View::make('spot.spotView', compact('spot'));
    }
/*
    public function getForm()
	{
		return view('spot');
	}

	public function postForm(SpotRequest $request, SpotRepositoryInterface $emailRepository)
	{
		$SpotRepository->save($request->input('Spot'));

		return view('Spot_ok');
	}
*/
}

/*
public function __construct(Email $email)
{
  $this->email = $email;
}

public function save($mail)
{
      $this->email->email = $mail;
      $this->email->save();
}

*/
