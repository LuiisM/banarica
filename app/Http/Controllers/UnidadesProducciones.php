<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnidadesProduccion;

class UnidadesProducciones extends Controller
{
                /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return UnidadesProduccion::all();
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
    $UnidadesProduccion = new UnidadesProduccion;
    $UnidadesProduccion->nombre = $request->nombre;
    $UnidadesProduccion->identificacion = $request->identificacion;
    $UnidadesProduccion->cod_productor = $request->cod_productor;

    if($UnidadesProduccion->save()){
    	return "UnidadesProduccion creada";
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
   	return UnidadesProduccion::findOrFail($id)->get();
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
    $UnidadesProduccion = UnidadesProduccion::find($id);
    $request->except('id');
    $UnidadesProduccion->fill($request->all());
    $UnidadesProduccion->save();
    return UnidadesProduccion::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $UnidadesProduccion->destroy($id);
  }
}
