<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ubicacione
 * 
 * @property int $id
 * @property string $nombre
 * @property int $sucursale_id
 * @property string $codigo
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Sucursale $sucursale
 *
 * @package App\Models
 */
class Ubicacion extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "ubicaciones";
	protected $casts = [
		'sucursale_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'sucursale_id',
		'codigo'
	];

	public function sucursale()
	{
		return $this->belongsTo(\App\Models\Sucursale::class);
	}
}
