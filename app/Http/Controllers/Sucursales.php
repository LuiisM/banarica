<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class Sucursales extends Controller
{
                 /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Sucursal::all();
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
    $Sucursal = new Sucursal;
    $Sucursal->nombre = $request->nombre;
    $Sucursal->sede_id = $request->sede_id;
    $Sucursal->descripcion = $request->descripcion;

    if($Sucursal->save()){
    	return "Sucursal creada";
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
   	return Sucursal::findOrFail($id)->get();
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
    $Sucursal = Sucursal::find($id);
    $request->except('id');
    $Sucursal->fill($request->all());
    $Sucursal->save();
    return Sucursal::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Sucursal->destroy($id);
  }
}
