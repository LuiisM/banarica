<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PrivilegiosTipo
 * 
 * @property int $id
 * @property int $tipo_id
 * @property int $privilegio_id
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Privilegio $privilegio
 * @property \App\Models\Tipo $tipo
 *
 * @package App\Models
 */
class PrivilegiosTipo extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "privilegios_tipos";
	protected $casts = [
		'tipo_id' => 'int',
		'privilegio_id' => 'int'
	];

	protected $fillable = [
		'tipo_id',
		'privilegio_id'
	];

	public function privilegio()
	{
		return $this->belongsTo(\App\Models\Privilegio::class);
	}

	public function tipo()
	{
		return $this->belongsTo(\App\Models\Tipo::class);
	}
}
