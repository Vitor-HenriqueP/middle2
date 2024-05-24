<?php
namespace App\Http\Controllers;
use App\Models\Chamado;
use App\Models\Cliente;
use Illuminate\Http\Request;
class ChamadoController extends Controller
{
/**
* Display a listing of the resource.
*

* @return \Illuminate\Http\Response
*/
public function index()
{
$chamados = Chamado::all();
return view('chamados.index', compact('chamados'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$clientes = Cliente::all();
return view('chamados.create', compact('clientes'));
}
/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$chamado = Chamado::create($request->all());
return redirect()->route('chamados.show', $chamado)->with('success', 'Chamado criado
com sucesso!');
}
/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show(Chamado $chamado)
{
return view('chamados.show', compact('chamado'));
}
/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response

*/
public function edit(Chamado $chamado)
{
$clientes = Cliente::all();
return view('chamados.edit', compact('chamado', 'clientes'));
}
/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Chamado $chamado)
{
$chamado->update($request->all());
return redirect()->route('chamados.show', $chamado)->with('success', 'Chamado

atualizado com sucesso!');
}
/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy(Chamado $chamado)
{
$chamado->delete();
return redirect()->route('chamados.index')->with('success', 'Chamado excluído com
sucesso!');
}
}