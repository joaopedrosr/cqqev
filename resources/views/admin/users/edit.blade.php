@extends('adminlte::page')

@section('title', 'Com que quiche eu vou?')

@section('content_header')
    <h1>Atribuir uma função</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-sucess">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <p class="h5">Nome:</p>
            <p class = "form-control">{{$user->name}}</p>

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Atribur uma função', ['class'=> 'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop