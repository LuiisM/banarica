<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:24 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombre
 * @property string $nit
 * @property string $direccion
 * @property int $ciudade_id
 * @property string $created
 * @property string $modified
 * 
 * @property \App\Models\Ciudade $ciudade
 * @property \Illuminate\Database\Eloquent\Collection $contactos
 * @property \Illuminate\Database\Eloquent\Collection $proclientes
 * @property \Illuminate\Database\Eloquent\Collection $programaciones
 *
 * @package App\Models
 */
class Cliente extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "clientes";

	protected $casts = [
		'ciudade_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'nit',
		'direccion',
		'ciudade_id'
	];

	public function ciudade()
	{
		return $this->belongsTo(\App\Models\Ciudade::class);
	}

	public function contactos()
	{
		return $this->hasMany(\App\Models\Contacto::class);
	}

	public function proclientes()
	{
		return $this->hasMany(\App\Models\Procliente::class);
	}

	public function programaciones()
	{
		return $this->hasMany(\App\Models\Programacione::class);
	}
}
