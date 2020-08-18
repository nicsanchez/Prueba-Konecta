@extends('layouts.base')

@section('titulo')
    Usuarios | Konecta
@stop

@section('css')
    {!!Html::style("css/user_style.css")!!}
@stop

@section('label')
    <i class="fas fa-users"></i> Usuarios
@stop

@section('accion')
    <a class="create" href="/user/create"><i class="fas fa-plus-circle"></i> Crear</a>
    <div id="text">{!! Form::text("text_search", null, ["placeholder"=>"Busqueda..."]) !!}</div>
@stop

@section('content')
    <table>
        <thead>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Correo</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>
                        @if ($user->rol=="0")
                            Administrador
                        @elseif($user->rol=="1")
                            Vendedor
                        @endif
                    </td>
                    <td>{{$user->email}}</td>
                    <td>
                        {!! link_to_route("user.edit", $title = "Editar", $parameters = [$user->id], $attributes = ["class"=>"edit"]) !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('alerts.success')
@stop
