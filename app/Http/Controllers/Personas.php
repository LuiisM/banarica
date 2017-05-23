<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class Personas extends Controller
{
     /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Persona::all();
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
    $persona = new Persona;
    $persona->cedula = $request->cedula;
    $persona->nombres = $request->nombres;
    $persona->apellidos = $request->apellidos;
    $persona->direccion = $request->direccion;
    $persona->barrio = $request->barrio;
    $persona->ciudade_id = $request->ciudade_id;
    $persona->telefono = $request->telefono;
    $persona->celular = $request->celular;
    $persona->email = $request->email;
    if($persona->save()){
    	return "Persona creada";
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
   	return Persona::findOrFail($id)->get();
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
    $persona = Persona::find($id);
    $request->except('id');
    $persona->fill($request->all());
    $persona->save();
    return Persona::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $persona->destroy($id);
  }
}
