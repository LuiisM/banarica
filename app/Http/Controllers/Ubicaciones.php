<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubicaciones;

class Ubicaciones extends Controller
{
             /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Ubicacion::all();
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
    $Ubicacion = new Ubicacion;
    $Ubicacion->nombre = $request->nombre;
    $Ubicacion->codigo = $request->codigo;
    $Ubicacion->ciudade_id = $request->sucursale_id;

    if($Ubicacion->save()){
    	return "Ubicacion creada";
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
   	return Ubicacion::findOrFail($id)->get();
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
    $Ubicacion = Ubicacion::find($id);
    $request->except('id');
    $Ubicacion->fill($request->all());
    $Ubicacion->save();
    return Ubicacion::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Ubicacion->destroy($id);
  }
}
