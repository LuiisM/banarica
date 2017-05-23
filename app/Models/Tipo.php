<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tipo
 * 
 * @property int $id
 * @property string $nombre
 * @property string $created
 * @property string $modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $privilegios
 * @property \Illuminate\Database\Eloquent\Collection $usuarios
 *
 * @package App\Models
 */
class Tipo extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "tipos";
	protected $fillable = [
		'nombre'
	];

	public function privilegios()
	{
		return $this->belongsToMany(\App\Models\Privilegio::class, 'privilegios_tipos')
					->withPivot('id')
					->withTimestamps();
	}

	public function usuarios()
	{
		return $this->hasMany(\App\Models\Usuario::class);
	}
}
