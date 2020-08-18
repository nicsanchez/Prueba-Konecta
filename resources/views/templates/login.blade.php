@extends('layouts.base')

@section('titulo')
    Login | Konecta
@stop

@section('label')
    Iniciar Sesion
@stop

@section('content')
    {!!Form::open(["route"=>"login.store","method"=>"POST"])!!}
        <div class="row">
            <div><i class="fas fa-envelope-open-text"></i> {!! Form::label("Correo:") !!}</div>
            <div>{!! Form::text("email", null, ["placeholder"=>"Ingrese el correo del usuario"]) !!}</div>
        </div>
        <div class="row">
            <div><i class="fas fa-key"></i> {!! Form::label("Contraseña:") !!}</div>
            <div>{!! Form::password("password", ["placeholder"=>"Ingrese la contraseña"]) !!}</div>
        </div>
        <div class="row">
            {!! Form::submit("Iniciar Sesion", ["class"=>"submit"]) !!}
        </div>
    {!!Form::close()!!}
    @include('alerts.request')
    @include('alerts.error')
@stop
