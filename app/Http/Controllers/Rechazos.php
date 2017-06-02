<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rechazo;

class Rechazos extends Controller
{
         /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Rechazo::all();
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
    $Rechazo = new Rechazo;
    $Rechazo->nombre = $request->nombre;
    $Rechazo->descripcion = $request->descripcion;

    if($Rechazo->save()){
    	return "Rechazo creado";
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
   	return Rechazo::findOrFail($id)->get();
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
    	return "Rechazo no encontrado";
    }    
    $Rechazo = Rechazo::find($id);
    $request->except('id');
    $Rechazo->fill($request->all());
    $Rechazo->save();
    return Rechazo::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Rechazo->destroy($id);
  }
}
