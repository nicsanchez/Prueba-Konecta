@extends('layouts.base')

@section('titulo')
    Editar Usuario | Konecta
@stop

@section('css')
    {!!Html::style("css/user_style.css")!!}
@stop

@section('label')
    <i class="fas fa-user-edit"></i> Editar a {{$user->name}}
@stop

@section('content')
    {!!Form::model($user,["route"=>["user.update",$user->id],"method"=>"PUT"])!!}
        @include('templates.user.forms.form')
        <div class="row">
            {!! Form::submit("Actualizar", ["class"=>"submit"]) !!}
        </div>
    {!!Form::close()!!}

    {!!Form::open(["route"=>["user.destroy",$user->id],"method"=>"DELETE"])!!}
        <div class="row">
            {!! Form::submit("Eliminar", ["class"=>"submit_delete"]) !!}
        </div>
    {!!Form::close()!!}
    @include('alerts.request')
@stop
