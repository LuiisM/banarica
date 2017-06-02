<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class Productos extends Controller
{
        /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Producto::all();
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
    $Producto = new Producto;
    $Producto->nombre = $request->nombre;
    $Producto->codigo = $request->codigo;
    $Producto->codigo = $request->descripcion;
    $Producto->tproducto_id = $request->tproducto_id;
    if($Producto->save()){
    	return "Producto creado";
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
   	return Producto::findOrFail($id)->get();
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
    	return "Producto no encontrado";
    }    
    $Producto = Producto::find($id);
    $request->except('id');
    $Producto->fill($request->all());
    $Producto->save();
    return Producto::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $Producto->destroy($id);
  }
}
