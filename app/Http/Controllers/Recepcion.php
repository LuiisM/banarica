<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recepcion;

class Recepcion extends Controller
{
                /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Recepcion::all();
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $Recepcion = new Recepcion;
    $Recepcion->codigo_manifiesto = $request->codigo_manifiesto;
    $Recepcion->transportadoras_finca_id = $request->transportadoras_finca_id;
    $Recepcion->placa = $request->placa;
    $Recepcion->fecha_placa = $request->fecha_placa;
    $Recepcion->hora_salida = $request->hora_salida;
    $Recepcion->hora_llegada = $request->hora_llegada;
    $Recepcion->ubicacione_id = $request->ubicacione_id;

    if($Recepcion->save()){
    	return "Recepcion creada";
    }
    return "Verifique los campos de nuevo";
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
  	if(!$id) return $this->index();
   	return Recepcion::findOrFail($id)->get();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Request $request,$id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
    if(!$id){
    	return "Usuario no encontrado";
    }    
    $Recepcion = Recepcion::find($id);
    $request->except('id');
    $Recepcion->fill($request->all());
    $Recepcion->save();
    return Recepcion::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Recepcion->destroy($id);
  }
}
