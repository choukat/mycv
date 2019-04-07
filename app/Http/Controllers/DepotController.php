<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DepotRepository;
use App\Http\Requests\DepotRequest;

class DepotController extends Controller
{
    protected $depotRepository;
    protected $nbrPerPage = 2;

    public function __construct(DepotRepository $depotRepository) {
      $this->depotRepository = $depotRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depots = $this->depotRepository->getPaginate($this->nbrPerPage);
        $links = $depots->render();

        return view('depots.liste', compact('depots', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depots.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $depot = $this->depotRepository->store($request->all());
        return redirect(route('depot.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('depots.show', [
        'depot' => $this->depotRepository->getById($id)
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
        $this->depotRepository->destroy($id);
        return back();
    }
}
