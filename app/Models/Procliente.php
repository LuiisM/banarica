<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Procliente
 * 
 * @property int $id
 * @property int $cliente_id
 * @property int $producto_id
 * @property float $cantidad
 * @property \Carbon\Carbon $created
 * @property string $modified
 * 
 * @property \App\Models\Cliente $cliente
 * @property \App\Models\Producto $producto
 *
 * @package App\Models
 */
class Procliente extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "proclientes";
	protected $casts = [
		'cliente_id' => 'int',
		'producto_id' => 'int',
		'cantidad' => 'float'
	];

	protected $fillable = [
		'cliente_id',
		'producto_id',
		'cantidad'
	];

	public function cliente()
	{
		return $this->belongsTo(\App\Models\Cliente::class);
	}

	public function producto()
	{
		return $this->belongsTo(\App\Models\Producto::class);
	}
}
