<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Motonafe
 * 
 * @property int $id
 * @property string $nombre
 * @property string $call_sign
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $programaciones
 *
 * @package App\Models
 */
class Motonave extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "motonaves";
	protected $fillable = [
		'nombre',
		'call_sign'
	];

	public function programaciones()
	{
		return $this->hasMany(\App\Models\Programacion::class, 'motonave_id');
	}
}
