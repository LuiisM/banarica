<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programacion;

class Programaciones extends Controller
{
                /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Programacion::all();
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
    $Programacion = new Programacion;
    $Programacion->sede_id = $request->sede_id;
    $Programacion->cliente_id = $request->cliente_id;
    $Programacion->motonave_id = $request->motonave_id;
    $Programacion->fecha_lote = $request->fecha_lote;
    $Programacion->descripcion = $request->descripcion;

    if($Programacion->save()){
    	return "Programacion creada";
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
   	return Programacion::findOrFail($id)->get();
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
    	return "Programacion no encontrada";
    }    
    $Programacion = Programacion::find($id);
    $request->except('id');
    $Programacion->fill($request->all());
    $Programacion->save();
    return Programacion::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Programacion->destroy($id);
  }
}
