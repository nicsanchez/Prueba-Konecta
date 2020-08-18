
@extends('layouts.base')

@section('titulo')
    Editar Cliente | Konecta
@stop

@section('css')
    {!!Html::style("css/client_style.css")!!}
@stop

@section('label')
    <i class="fas fa-user-edit"></i> Editar a {{$cliente->name}}
@stop

@section('content')
    {!! Form::model($cliente,['route'=>['client.update',$cliente->id],'method'=>'PUT']) !!}
        @include('templates.client.forms.form')
        <div class='row'>
            {!! Form::submit("Actualizar", ['class'=>"submit"]) !!}
        </div>
    {!! Form::close() !!}
    {!! Form::open(['route'=>['client.destroy',$cliente->id],'method'=>'DELETE']) !!}
        <div class='row'>
            {!! Form::submit("Eliminar", ['class'=>"submit_delete"]) !!}
        </div>
    {!! Form::close() !!}
    @include('alerts.request')
@stop
