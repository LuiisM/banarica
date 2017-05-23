<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UnidadesProduccione
 * 
 * @property int $id
 * @property string $nombre
 * @property string $identificacion
 * @property string $cod_productor
 * @property string $descripcion
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $transportadoras_fincas
 *
 * @package App\Models
 */
class UnidadesProduccione extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';

	protected $table = "unidades_producciones";
	protected $fillable = [
		'nombre',
		'identificacion',
		'cod_productor',
		'descripcion'
	];

	public function transportadoras_fincas()
	{
		return $this->hasMany(\App\Models\TransportadorasFinca::class);
	}
}
