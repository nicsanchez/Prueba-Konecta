@extends('layouts.base')

@section('titulo')
    Nuevo Usuario | Konecta
@stop

@section('css')
    {!!Html::style("css/user_style.css")!!}
@stop

@section('label')
    <i class="fas fa-user-plus"></i> Crear un nuevo usuario
@stop

@section('content')
    {!!Form::open(["route"=>"user.store","method"=>"POST"])!!}
        @include('templates.user.forms.form')
        <div class="row">
            {!! Form::submit("Registrar", ["class"=>"submit"]) !!}
        </div>
    {!!Form::close()!!}
    @include('alerts.request')
@stop

