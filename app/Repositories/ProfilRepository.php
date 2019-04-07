<?php namespace App\Repositories;

use App\Profil;

class ProfilRepository {

  protected $profil;

  public function __construct(Profil $profil)
	{
		$this->profil = $profil;
	}

  public function getById($id)
  {
    return $this->profil->findOrFail($id);
  }
}
