<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Recepcione
 * 
 * @property int $id
 * @property string $codigo_manifiesto
 * @property int $transportadoras_finca_id
 * @property string $placa
 * @property \Carbon\Carbon $fecha_corte
 * @property \Carbon\Carbon $hora_salida
 * @property \Carbon\Carbon $hora_llegada
 * @property int $ubicacione_id
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $recepciones_detalles
 *
 * @package App\Models
 */
class Recepcion extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

    protected $table = "recepciones";
	protected $casts = [
		'transportadoras_finca_id' => 'int',
		'ubicacione_id' => 'int'
	];

	protected $dates = [
		'fecha_corte',
		'hora_salida',
		'hora_llegada'
	];

	protected $fillable = [
		'codigo_manifiesto',
		'transportadoras_finca_id',
		'placa',
		'fecha_corte',
		'hora_salida',
		'hora_llegada',
		'ubicacione_id'
	];

	public function recepciones_detalles()
	{
		return $this->hasMany(\App\Models\RecepcionesDetalle::class);
	}
}
