<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class Departamentos extends Controller
{
        /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Departamento::all();
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
    $Departamento = new Departamento;
    $Departamento->nombre = $request->nombre;

    if($Departamento->save()){
    	return "Departamento creada";
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
   	return Departamento::findOrFail($id)->get();
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
    $Departamento = Departamento::find($id);
    $request->except('id');
    $Departamento->fill($request->all());
    $Departamento->save();
    return Departamento::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Departamento->destroy($id);
  }
}
