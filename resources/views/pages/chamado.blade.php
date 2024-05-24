@extends('layouts.app')
@section('titulo', 'Detalhes do Chamado')
@section('conteudo')
<div class="container">
<h1>{{ $chamado->assunto }}</h1>
<p>{{ $chamado->descricao }}</p>
<p>Data do Chamado: {{ $chamado->data_chamado }}</p>
</div>
@endsection