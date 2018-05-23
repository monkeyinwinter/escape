<?php

namespace App\Repositories;

use App\Spot;

class SpotRepository implements SpotRepositoryInterface
{

    protected $spot;

	public function __construct(Spot $spot)
	{
		$this->spot = $spot;
	}

	public function save($newspot)
	{
        $this->spot->spot = $newspot;
        $this->spot->save();
	}

}
