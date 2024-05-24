@extends('layouts.app')
@section('titulo', 'Dashboard')
@section('conteudo')
<div class="container">
<h1>Dashboard</h1>
<div class="row">
@foreach ($chamados as $chamado)
@include('components.chamado-card', ['chamado' => $chamado])
@endforeach
</div>
</div>
@endsection