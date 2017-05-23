<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:24 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Departamento
 * 
 * @property int $id
 * @property string $nombre
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $ciudades
 *
 * @package App\Models
 */
class Departamento extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "departamentos";

	protected $fillable = [
		'nombre'
	];

	public function ciudades()
	{
		return $this->hasMany(\App\Models\Ciudade::class, 'departamentos_id');
	}
}
