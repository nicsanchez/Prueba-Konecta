
@extends('layouts.base')

@section('titulo')
    Nuevo Cliente | Konecta
@stop

@section('css')
    {!!Html::style("css/client_style.css")!!}
@stop

@section('label')
    <i class="fas fa-user-plus"></i> Crear un nuevo cliente
@stop

@section('content')
    {!! Form::open(['route'=>'client.store','method'=>'POST']) !!}
        @include('templates.client.forms.form')
        <div class='row'>
            {!! Form::submit("Registrar", ['class'=>"submit"]) !!}
        </div>
    {!! Form::close() !!}
    @include('alerts.request')
@stop
