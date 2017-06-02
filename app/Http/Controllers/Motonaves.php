<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motonave;

class Motonaves extends Controller
{
      /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Motonave::all();
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
    $Motonave = new Motonave;
    $Motonave->nombre = $request->nombre;
    $Motonave->nombre = $request->call_sign;

    if($Motonave->save()){
    	return "Motonave creada";
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
   	return Motonave::findOrFail($id)->get();
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
    $Motonave = Motonave::find($id);
    $request->except('id');
    $Motonave->fill($request->all());
    $Motonave->save();
    return Motonave::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Motonave->destroy($id);
  }
}
