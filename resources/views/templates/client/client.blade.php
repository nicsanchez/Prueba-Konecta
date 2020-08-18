@extends('layouts.base')

@section('titulo')
    Clientes | Konecta
@stop

@section('css')
    {!!Html::style("css/client_style.css")!!}
@stop

@section('label')
    <i class="fas fa-users"></i> Clientes
@stop

@section('accion')
    <a class="create" href="client/create"><i class="fas fa-plus-circle"></i> Crear</a>
    <div id="text">{!! Form::text("text_search", null, ["placeholder"=>"Busqueda..."]) !!}</div>
@stop

@section('content')
    @if (count($clientes)>0)
        <table>
            <thead>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->name}}</td>
                        <td>{{$cliente->document}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->address}}</td>

                        <td>{!! link_to_route("client.edit", $title = "Editar", $parameters = [$cliente->id], $attributes = ["class"=>"edit"]) !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('alerts.success')
        @include('alerts.error')
    @else
        <div class="errores">
            <ul>
                <li>No hay clientes registrados.</li>
            </ul>
        </div>
    @endif
@stop
