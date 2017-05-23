<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rechazo
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 *
 * @package App\Models
 */
class Rechazo extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "rechazos";

	protected $fillable = [
		'nombre',
		'descripcion'
	];
}
