<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 21 May 2017 02:42:25 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TransportadorasFinca
 * 
 * @property int $id
 * @property int $transportadora_id
 * @property int $unidades_produccione_id
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * 
 * @property \App\Models\UnidadesProduccione $unidades_produccione
 * @property \App\Models\Transportadora $transportadora
 *
 * @package App\Models
 */
class TransportadorasFinca extends Eloquent
{
	const CREATED_AT = 'created';
	const UPDATED_AT = 'modified';
	protected $table = "transportadoras_fincas";
	protected $casts = [
		'transportadora_id' => 'int',
		'unidades_produccione_id' => 'int'
	];

	protected $fillable = [
		'transportadora_id',
		'unidades_produccione_id'
	];

	public function unidades_produccione()
	{
		return $this->belongsTo(\App\Models\UnidadesProduccione::class);
	}

	public function transportadora()
	{
		return $this->belongsTo(\App\Models\Transportadora::class);
	}
}
