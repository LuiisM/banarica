<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tproducto
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $codigo
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $productos
 *
 * @package App\Models
 */
class Tproducto extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "tproductos";
	protected $fillable = [
		'nombre',
		'descripcion',
		'codigo'
	];

	public function productos()
	{
		return $this->hasMany(\App\Models\Producto::class);
	}
}
