<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Programacione
 * 
 * @property int $id
 * @property int $sede_id
 * @property int $cliente_id
 * @property int $motonave_id
 * @property string $fecha_lote
 * @property string $descripcion
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Cliente $cliente
 * @property \App\Models\Motonafe $motonafe
 * @property \App\Models\Sede $sede
 * @property \Illuminate\Database\Eloquent\Collection $programaciondetalles
 * @property \Illuminate\Database\Eloquent\Collection $recepciones_detalles
 *
 * @package App\Models
 */
class Programacion extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table="programaciones";
	protected $casts = [
		'sede_id' => 'int',
		'cliente_id' => 'int',
		'motonave_id' => 'int'
	];

	protected $fillable = [
		'sede_id',
		'cliente_id',
		'motonave_id',
		'fecha_lote',
		'descripcion'
	];

	public function cliente()
	{
		return $this->belongsTo(\App\Models\Cliente::class);
	}

	public function motonafe()
	{
		return $this->belongsTo(\App\Models\Motonave::class, 'motonave_id');
	}

	public function sede()
	{
		return $this->belongsTo(\App\Models\Sede::class);
	}

	public function programaciondetalles()
	{
		return $this->hasMany(\App\Models\Programaciondetalle::class);
	}

	public function recepciones_detalles()
	{
		return $this->hasMany(\App\Models\RecepcionesDetalle::class);
	}
}
