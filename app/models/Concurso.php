<?php

class Concurso extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'nombre' => 'required|min:5'
	];

	// Don't forget to fill this array
	protected $fillable = ['nombre'];

	public function empresas()
    {
        return $this->belongsToMany('Empresa');
    }

    public function etapas()
    {
    	return $this->hasMany('Etapa');
    }

}