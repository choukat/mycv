<?php namespace App\Repositories;

use App\Realisation;

class RealisationRepository extends ResourceRepository {
  public function __construct(Realisation $realisation) {
    $this->model = $realisation;
  }
}
