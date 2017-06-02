<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RecepcionesDetalle
 * 
 * @property int $id
 * @property int $programacione_id
 * @property string $EAN
 * @property string $SSCC
 * @property float $cantidad
 * @property int $recepcione_id
 * @property string $contenedor
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Programacione $programacione
 * @property \App\Models\Recepcione $recepcione
 *
 * @package App\Models
 */
class RecepcionesDetalle extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "recepciones_detalles";
	protected $casts = [
		'programacione_id' => 'int',
		'cantidad' => 'float',
		'recepcione_id' => 'int'
	];

	protected $fillable = [
		'programacione_id',
		'EAN',
		'SSCC',
		'cantidad',
		'recepcione_id',
		'contenedor'
	];

	public function programacione()
	{
		return $this->belongsTo(\App\Models\Programacion::class);
	}

	public function recepcione()
	{
		return $this->belongsTo(\App\Models\Recepcion::class);
	}
}
