<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompetenceRepository;
use App\Http\Requests\CompetenceRequest;

class CompetenceController extends Controller
{
    protected $competenceRepository;
    protected $nbrPerPage = 2;

    public function __construct(CompetenceRepository $competenceRepository)
    {
      $this->competenceRepository = $competenceRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competences = $this->competenceRepository->getPaginate($this->nbrPerPage);
        $links = $competences->render();

        return view('competences.liste', compact('competences', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competences.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $competence = $this->competenceRepository->store($request->all());
        return redirect(route('competence.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('competences.show', [
          'competence' => $this->competenceRepository->getById($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->competenceRepository->destroy($id);
        return back();
    }
}
