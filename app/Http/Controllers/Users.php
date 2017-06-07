<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Users extends Controller
{
      /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return User::all();
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
    $user = new User;
    $user->email = $request->email;
    $user->password = \Hash::make($request->password);

    if($user->save()){
    	return "user creado";
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
   	return User::findOrFail($id)->get();
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
    $user = User::find($id);
    $request->except('id');
    $user->fill($request->all());
    $user->save();
    return User::findOrFail($id)->get();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
  	
    return $user->destroy($id);
  }
}
