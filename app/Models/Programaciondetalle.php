<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Programaciondetalle
 * 
 * @property int $id
 * @property int $producto_id
 * @property float $cantidad
 * @property int $programacione_id
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Producto $producto
 * @property \App\Models\Programacione $programacione
 *
 * @package App\Models
 */
class Programaciondetalle extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';


	protected $table = "programacion_detalles";
	protected $casts = [
		'producto_id' => 'int',
		'cantidad' => 'float',
		'programacione_id' => 'int'
	];

	protected $fillable = [
		'producto_id',
		'cantidad',
		'programacione_id'
	];

	public function producto()
	{
		return $this->belongsTo(\App\Models\Producto::class);
	}

	public function programacione()
	{
		return $this->belongsTo(\App\Models\Programacion::class);
	}
}
