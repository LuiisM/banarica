<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:24 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Contacto
 * 
 * @property int $id
 * @property int $cliente_id
 * @property string $nombre
 * @property string $telefono
 * @property string $email
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\Cliente $cliente
 *
 * @package App\Models
 */
class Contacto extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "contactos";
	protected $casts = [
		'cliente_id' => 'int'
	];

	protected $fillable = [
		'cliente_id',
		'nombre',
		'telefono',
		'email'
	];

	public function cliente()
	{
		return $this->belongsTo(\App\Models\Cliente::class);
	}
}
