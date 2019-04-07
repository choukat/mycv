<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ExperienceRepository;
use App\Http\Requests\ExperienceRequest;

class ExperienceController extends Controller
{
    protected $experienceRepository;
    protected $nbrPerPage = 2;

    public function __construct(ExperienceRepository $experienceRepository)
    {
      $this->experienceRepository = $experienceRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = $this->experienceRepository->getPaginate($this->nbrPerPage);
        $links = $experiences->render();

        return view('experiences.liste', compact('experiences', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experiences.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experience = $this->experienceRepository->store($request->all());
        return redirect(route('experience.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('experiences.show', [
          'experience' => $this->experienceRepository->getById($id)
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
        $this->experienceRepository->destroy($id);
        return back();
    }
}
