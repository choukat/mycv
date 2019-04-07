<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RealisationRepository;
use App\Http\Requests\RealisationRequest;

class RealisationController extends Controller
{
    protected $realisationRepository;
    protected $nbrPerPage = 2;

    public function __construct(RealisationRepository $realisationRepository) {
      $this->realisationRepository = $realisationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $realisations = $this->realisationRepository->getPaginate($this->nbrPerPage);
      $links = $realisations->render();

      return view('realisations.liste', compact('realisations', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('realisations.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $realisation = $this->realisationRepository->store($request->all());
      return redirect(route('realisation.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('realisations.show', [
          'realisation' => $this->realisationRepository->getById($id)
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
        $this->realisationRepository->destroy($id);
        return back();
    }
}
