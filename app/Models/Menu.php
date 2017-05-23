<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Menu
 * 
 * @property int $id
 * @property string $nombres
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * @property string $icono
 * 
 * @property \Illuminate\Database\Eloquent\Collection $privilegios
 *
 * @package App\Models
 */
class Menu extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $fillable = [
		'nombres',
		'icono'
	];

	public function privilegios()
	{
		return $this->hasMany(\App\Models\Privilegio::class);
	}
}
