<?php

class ConcursosController extends \BaseController {

	/**
	 * Display a listing of concursos
	 *
	 * @return Response
	 */
	public function index()
	{
		$concursos = Concurso::all();

		return View::make('concursos.index', compact('concursos'));
	}

	/**
	 * Show the form for creating a new concurso
	 *
	 * @return Response
	 */
	public function create()
	{
		// GET
		return View::make('concursos.create');
	}

	/**
	 * Store a newly created concurso in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// POST
		$validator = Validator::make($data = Input::all(), Concurso::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Concurso::create($data);

		return Redirect::route('concursos.index');
	}

	/**
	 * Display the specified concurso.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$concurso = Concurso::findOrFail($id);

		return View::make('concursos.show', compact('concurso'));
	}

	/**
	 * Show the form for editing the specified concurso.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$concurso = Concurso::find($id);

		return View::make('concursos.edit', compact('concurso'));
	}

	/**
	 * Update the specified concurso in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$concurso = Concurso::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Concurso::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$concurso->update($data);

		return Redirect::route('concursos.index');
	}

	/**
	 * Remove the specified concurso from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Concurso::destroy($id);

		return Redirect::route('concursos.index');
	}

}
