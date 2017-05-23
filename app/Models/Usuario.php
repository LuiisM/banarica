<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $usser
 * @property string $password
 * @property int $persona_id
 * @property int $tipo_id
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Persona $persona
 * @property \App\Models\Tipo $tipo
 *
 * @package App\Models
 */
class Usuario extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $casts = [
		'persona_id' => 'int',
		'tipo_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'usser',
		'password',
		'persona_id',
		'tipo_id'
	];

	public function persona()
	{
		return $this->belongsTo(\App\Models\Persona::class);
	}

	public function tipo()
	{
		return $this->belongsTo(\App\Models\Tipo::class);
	}
}
