<?php

class EtapasController extends \BaseController {

	/**
	 * Display a listing of etapas
	 *
	 * @return Response
	 */
	public function index()
	{
		$etapas = Etapa::all();

		return View::make('etapas.index', compact('etapas'));
	}

	/**
	 * Show the form for creating a new etapa
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('etapas.create');
	}

	/**
	 * Store a newly created etapa in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Etapa::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Etapa::create($data);

		return Redirect::route('etapas.index');
	}

	/**
	 * Display the specified etapa.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$etapa = Etapa::findOrFail($id);

		return View::make('etapas.show', compact('etapa'));
	}

	/**
	 * Show the form for editing the specified etapa.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$etapa = Etapa::find($id);

		return View::make('etapas.edit', compact('etapa'));
	}

	/**
	 * Update the specified etapa in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$etapa = Etapa::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Etapa::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$etapa->update($data);

		return Redirect::route('etapas.index');
	}

	/**
	 * Remove the specified etapa from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Etapa::destroy($id);

		return Redirect::route('etapas.index');
	}

}
