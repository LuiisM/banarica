<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:24 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ciudade
 * 
 * @property int $id
 * @property string $nombre
 * @property int $departamentos_id
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Departamento $departamento
 * @property \Illuminate\Database\Eloquent\Collection $clientes
 * @property \Illuminate\Database\Eloquent\Collection $personas
 *
 * @package App\Models
 */
class Ciudad extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "ciudades";

	protected $casts = [
		'departamentos_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'departamentos_id'
	];

	public function departamento()
	{
		return $this->belongsTo(\App\Models\Departamento::class, 'departamentos_id');
	}

	public function clientes()
	{
		return $this->hasMany(\App\Models\Cliente::class);
	}

	public function personas()
	{
		return $this->hasMany(\App\Models\Persona::class);
	}
}
