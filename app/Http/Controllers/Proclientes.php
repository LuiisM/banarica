<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procliente;

class Proclientes extends Controller
{
            /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Procliente::all();
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
    $Procliente = new Procliente;
    $Procliente->cliente_id = $request->cliente_id;
    $Procliente->producto_id = $request->producto_id;
    $Procliente->cantidad = $request->cantidad;

    if($Procliente->save()){
    	return "Procliente creada";
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
   	return Procliente::findOrFail($id)->get();
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
    $Procliente = Procliente::find($id);
    $request->except('id');
    $Procliente->fill($request->all());
    $Procliente->save();
    return Procliente::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Procliente->destroy($id);
  }
}
