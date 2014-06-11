<?php

class Etapa extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

		public function concurso()
    {
        return $this->belongsTo('Concurso');
    }

}