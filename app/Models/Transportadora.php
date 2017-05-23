<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Transportadora
 * 
 * @property int $id
 * @property string $nombre
 * @property string $created
 * @property string $modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $transportadoras_fincas
 *
 * @package App\Models
 */
class Transportadora extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "transportadoras";
	protected $fillable = [
		'nombre'
	];

	public function transportadoras_fincas()
	{
		return $this->hasMany(\App\Models\TransportadorasFinca::class);
	}
}
