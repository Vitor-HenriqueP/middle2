<?php
namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
class ClienteController extends Controller
{
/**
* Display a listing of the resource.

*
* @return \Illuminate\Http\Response
*/
public function index()
{
$clientes = Cliente::all();
return view('clientes.index', compact('clientes'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('clientes.create');
}
/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$cliente = Cliente::create($request->all());
return redirect()->route('clientes.show', $cliente)->with('success', 'Cliente criado com
sucesso!');
}
/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show(Cliente $cliente)
{
return view('clientes.show', compact('cliente'));
}
/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response

*/
public function edit(Cliente $cliente)
{
return view('clientes.edit', compact('cliente'));
}
/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Cliente $cliente)
{
$cliente->update($request->all());
return redirect()->route('clientes.show', $cliente)->with('success', 'Cliente atualizado
com sucesso!');
}
/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy(Cliente $cliente)
{
$cliente->delete();
return redirect()->route('clientes.index')->with('success', 'Cliente excluído com

sucesso!');
}
}