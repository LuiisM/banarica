<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Persona
 * 
 * @property int $id
 * @property string $cedula
 * @property string $nombres
 * @property string $apellidos
 * @property string $direccion
 * @property string $barrio
 * @property int $ciudade_id
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Ciudade $ciudade
 * @property \Illuminate\Database\Eloquent\Collection $usuarios
 *
 * @package App\Models
 */
class Persona extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $casts = [
		'ciudade_id' => 'int'
	];

	protected $table = "personas";
	protected $fillable = [
		'cedula',
		'nombres',
		'apellidos',
		'direccion',
		'barrio',
		'ciudade_id',
		'telefono',
		'celular',
		'email'
	];

	public function ciudades()
	{
		return $this->belongsTo(\App\Models\Ciudad::class);
	}

	public function usuarios()
	{
		return $this->hasMany(\App\Models\Usuario::class);
	}
}
