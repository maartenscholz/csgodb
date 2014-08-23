<?php

use Cdb\Match\Match;
use Cdb\Team\Team;

class TeamController extends \BaseController {

    /**
     * @var
     */
    protected $team;
    /**
     * @var Match
     */
    private $match;

    /**
     * Constructor
     *
     * @param Team $team
     */
    public function __construct(Team $team, Match $match)
    {
        $this->team = $team;
        $this->match = $match;
    }

	/**
	 * Display a listing of the resource.
	 * GET /team
	 *
	 * @return Response
	 */
	public function index()
	{
        $teams = $this->team->orderBy('name')->paginate(10);
        $this->view('team.index', compact('teams'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /team/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /team
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /team/{id}
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$team = $this->team->findBySlug($slug);
        $matches = $this->match->where('home_team_id', $team->id)->orWhere('away_team_id', $team->id)->get();

        $this->view('team.show', compact('team', 'matches'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /team/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /team/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /team/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}