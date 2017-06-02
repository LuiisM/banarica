<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;

class Ciudades extends Controller
{
                /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Ciudad::all();
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
    $Ciudad = new Ciudad;
    $Ciudad->nombre = $request->nombre;
    $Ciudad->departamento_id = $request->departamento_id;

    if($Ciudad->save()){
    	return "Ciudad creada";
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
   	return Ciudad::findOrFail($id)->get();
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
    $Ciudad = Ciudad::find($id);
    $request->except('id');
    $Ciudad->fill($request->all());
    $Ciudad->save();
    return Ciudad::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Ciudad->destroy($id);
  }
}
