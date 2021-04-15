@extends('adminlte::page')

@section('title, Com que quiche eu vou?')

@section('content_header')
    <a class="btn btn-secondary btn float-right" href="{{route('admin.receitas.create')}}">Nova receita</a>
    
    <h1>Receitas</h1>

@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    @livewire('admin.receitas-index')
@stop


@section('css')
    <link rel='stylesheet' href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop