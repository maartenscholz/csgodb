<?php

class SearchController extends BaseController
{
    /**
     * Display a listing of the resource.
     * GET /search
     *
     * @return Response
     */
    public function index($q)
    {
        $results['teams'] = Team::search($q);
        $results['players'] = Player::search($q);
        $results = array_filter($results);

        View::share(compact('q'));
        $this->view('layouts.search', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /search/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /search
     *
     * @return Response
     */
    public function store()
    {
        return Redirect::route('search.index', Input::get('search'));
    }

    /**
     * Display the specified resource.
     * GET /search/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /search/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /search/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /search/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}