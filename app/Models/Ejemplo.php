<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:24 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ejemplo
 * 
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 *
 * @package App\Models
 */
class Ejemplo extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = 'ejemplo';

	protected $fillable = [
		'nombre',
		'apellido',
		'direccion'
	];
}
