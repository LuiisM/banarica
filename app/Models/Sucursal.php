<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sucursale
 * 
 * @property int $id
 * @property string $nombre
 * @property int $sede_id
 * @property string $descripcion
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Sede $sede
 * @property \Illuminate\Database\Eloquent\Collection $ubicaciones
 *
 * @package App\Models
 */
class Sucursale extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "sucursales";

	protected $casts = [
		'sede_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'sede_id',
		'descripcion'
	];

	public function sede()
	{
		return $this->belongsTo(\App\Models\Sede::class);
	}

	public function ubicaciones()
	{
		return $this->hasMany(\App\Models\Ubicacione::class);
	}
}
