<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Producto
 * 
 * @property int $id
 * @property int $tproducto_id
 * @property string $nombre
 * @property string $codigo
 * @property string $descripcion
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Tproducto $tproducto
 * @property \Illuminate\Database\Eloquent\Collection $proclientes
 * @property \Illuminate\Database\Eloquent\Collection $programaciondetalles
 *
 * @package App\Models
 */
class Producto extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "productos";
	protected $casts = [
		'tproducto_id' => 'int'
	];

	protected $fillable = [
		'tproducto_id',
		'nombre',
		'codigo',
		'descripcion'
	];

	public function tproducto()
	{
		return $this->belongsTo(\App\Models\Tproducto::class);
	}

	public function proclientes()
	{
		return $this->hasMany(\App\Models\Procliente::class);
	}

	public function programaciondetalles()
	{
		return $this->hasMany(\App\Models\Programaciondetalle::class);
	}
}
