<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DepotRepository;
use App\Repositories\ExperienceRepository;
use App\Repositories\RealisationRepository;
use App\Repositories\CompetenceRepository;
use App\Repositories\ClientRepository;
use App\Repositories\ProfilRepository;

class MainController extends Controller
{
    protected $nbrPerPage = 6;
    protected $depotRepository;
    protected $experienceRepository;
    protected $realisationRepository;
    protected $competenceRepository;
    protected $clientRepository;
    protected $profilRepository;

    public function __construct(DepotRepository $depotRepository,
                                ExperienceRepository $experienceRepository,
                                RealisationRepository $realisationRepository,
                                CompetenceRepository $competenceRepository,
                                ClientRepository $clientRepository,
                                ProfilRepository $profilRepository)
    {
      $this->depotRepository = $depotRepository;
      $this->experienceRepository = $experienceRepository;
      $this->realisationRepository = $realisationRepository;
      $this->competenceRepository = $competenceRepository;
      $this->clientRepository = $clientRepository;
      $this->profilRepository = $profilRepository;
    }

    public function index() {
      $depots = $this->depotRepository->getPaginate($this->nbrPerPage);
      $experiences = $this->experienceRepository->getPaginate($this->nbrPerPage);
      $realisations = $this->realisationRepository->getPaginate($this->nbrPerPage);
      $competences = $this->competenceRepository->getPaginate($this->nbrPerPage);
      $clients = $this->clientRepository->getPaginate($this->nbrPerPage);
      $profil = $this->profilRepository->getById(1);
      return view('tests.index', compact('depots','experiences','realisations','competences','clients','profil'));
    }
}
