<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sede
 * 
 * @property int $id
 * @property string $nombre
 * @property string $created
 * @property string $modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $programaciones
 * @property \Illuminate\Database\Eloquent\Collection $sucursales
 *
 * @package App\Models
 */
class Sede extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "sedes";

	protected $fillable = [
		'nombre'
	];

	public function programaciones()
	{
		return $this->hasMany(\App\Models\Programacione::class);
	}

	public function sucursales()
	{
		return $this->hasMany(\App\Models\Sucursale::class);
	}
}
