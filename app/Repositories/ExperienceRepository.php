<?php namespace App\Repositories;

use App\Experience;

class ExperienceRepository extends ResourceRepository {
  public function __construct(Experience $experience) {
    $this->model = $experience;
  }
}
