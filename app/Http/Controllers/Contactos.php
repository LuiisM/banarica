<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class Contactos extends Controller
{
      /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Contacto::all();
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
    $Contacto = new Contacto;
    $Contacto->cliente_id = $request->cliente_id;
    $Contacto->nombre = $request->nombre;
    $Contacto->telefono = $request->telefono;
    $Contacto->email = $request->email;

    if($Contacto->save()){
    	return "Contacto creado";
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
   	return Contacto::findOrFail($id)->get();
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
    $Contacto = Contacto::find($id);
    $request->except('id');
    $Contacto->fill($request->all());
    $Contacto->save();
    return Contacto::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Contacto->destroy($id);
  }
}
