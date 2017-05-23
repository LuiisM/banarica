<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Privilegio
 * 
 * @property int $id
 * @property string $nombre
 * @property string $enlace
 * @property int $menu_id
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Menu $menu
 * @property \Illuminate\Database\Eloquent\Collection $tipos
 *
 * @package App\Models
 */
class Privilegio extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "privilegios";
	protected $casts = [
		'menu_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'enlace',
		'menu_id'
	];

	public function menu()
	{
		return $this->belongsTo(\App\Models\Menu::class);
	}

	public function tipos()
	{
		return $this->belongsToMany(\App\Models\Tipo::class, 'privilegios_tipos')
					->withPivot('id')
					->withTimestamps();
	}
}
