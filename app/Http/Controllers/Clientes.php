<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class Clientes extends Controller
{
         /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Cliente::all();
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
    $Cliente = new Cliente;
    $Cliente->nombre = $request->nombre;
    $Cliente->nit = $request->nit;
    $Cliente->direccion = $request->direccion;
    $Cliente->ciudade_id = $request->ciudade_id;

    if($Cliente->save()){
    	return "Cliente creado";
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
   	return Cliente::findOrFail($id)->get();
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
    $Cliente = Cliente::find($id);
    $request->except('id');
    $Cliente->fill($request->all());
    $Cliente->save();
    return Cliente::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Cliente->destroy($id);
  }
}
