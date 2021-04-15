@extends('adminlte::page')

@section('title', 'Com que quiche eu vou?')

@section('content_header')

@can('admin.ingredientes.create')
    
    <a class="bt btn-secondary btn-sm float-right" href="{{route('admin.ingredientes.create')}}">Novo ingrediente</a>
@endcan

    <h1>Todos os ingredientes</h1>
@stop

@section('content')
@livewire('admin.ingredientes-index')
{{--         @if (session('info'))

        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>

        @endif


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($ingredientes as $ingrediente)
                        <tr>
                            <td>{{$ingrediente->id}}</td>
                            <td>{{$ingrediente->name}}</td>
                            <td widht="10px"><a class="btn btn-primary bt-sm" href="{{route('admin.ingredientes.edit', $ingrediente)}}">
                            Editar
                            </td>
                            <td widht="10px">
                                <form action="{{route('admin.ingredientes.destroy', $ingrediente)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="bt btn-danger bt-sm" type="submit">Eliminar</button>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>--}}
@stop 