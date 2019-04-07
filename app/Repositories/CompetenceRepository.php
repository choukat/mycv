<?php namespace App\Repositories;

use App\Competence;

class CompetenceRepository extends ResourceRepository {
  public function __construct(Competence $competence) {
    $this->model = $competence;
  }
}
