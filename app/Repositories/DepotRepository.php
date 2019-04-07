<?php namespace App\Repositories;

use App\Depot;

class DepotRepository extends ResourceRepository {
  public function __construct(Depot $depot) {
    $this->model = $depot;
  }
}
