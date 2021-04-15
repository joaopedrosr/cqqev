@extends('adminlte::page')

@section('title', 'Com que quiche eu vou?')

@section('content_header')
    <h1>Editar ingrediente</h1>
@stop

@section('content')

        @if (session('info'))

            <div class="alert alert-success">
                <strong>{{session('info')}}</strong>
            </div>
            
        @endif

<div class="card">
    <div class="card-body">
        {!! Form::model($ingrediente, ['route' =>['admin.ingredientes.update', $ingrediente], 'method'=> 'put']) !!}
        
        <div class="card">
            <div class="card-body">
    
        {!! Form::open(['route' => 'admin.ingredientes.store']) !!}
    
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Adicione aqui um novo ingrediente...']) !!}
        
            @error('name')
                <span class="text-danger">{{$message}}</span>
        
            @enderror
        
        </div>
        
        
        <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Aqui vai o Slug','readonly']) !!}
            @error('slug')
                <span class="text-danger">{{$message}}</span>
        
            @enderror
        
        
        </div>

        {!! Form::submit('Atualzar ingrediente', ['class' => 'btn btn-primary ']) !!}

        {!! Form::close() !!}

    
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>


<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space:'-'
        })
    })
</script>
@stop