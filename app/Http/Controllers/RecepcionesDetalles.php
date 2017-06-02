<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecepcionesDetalle;

class RecepcionesDetalles extends Controller
{
                  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return RecepcionesDetalle::all();
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
    $RecepcionesDetalle = new RecepcionesDetalle;
    $RecepcionesDetalle->programacione_id = $request->programacione_id;
    $RecepcionesDetalle->sscc = $request->sscc;
    $RecepcionesDetalle->ean = $request->ean;
    $RecepcionesDetalle->cantidad = $request->cantidad;
    $RecepcionesDetalle->recepcione_id = $request->recepcione_id;
    $RecepcionesDetalle->contenedor = $request->contenedor;

    if($RecepcionesDetalle->save()){
    	return "RecepcionesDetalle creada";
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
   	return RecepcionesDetalle::findOrFail($id)->get();
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
    $RecepcionesDetalle = RecepcionesDetalle::find($id);
    $request->except('id');
    $RecepcionesDetalle->fill($request->all());
    $RecepcionesDetalle->save();
    return RecepcionesDetalle::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $RecepcionesDetalle->destroy($id);
  }
}
