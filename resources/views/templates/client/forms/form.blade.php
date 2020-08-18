<div class="row">
    <div><i class="fas fa-user"></i> {!! Form::label('Nombre:') !!}</div>
    <div>{!! Form::text('name', null, ['placeholder'=>'Ingrese el nombre de usuario']) !!}</div>
</div>
<div class="row">
    <div><i class="far fa-id-card"></i> {!! Form::label('Documento:') !!}</div>
    <div>{!! Form::text('document', null, ['placeholder'=>'Ingrese el documento de usuario']) !!}</div>
</div>
<div class="row">
    <div><i class="fas fa-envelope-open-text"></i> {!! Form::label("Correo:") !!}</div>
    <div>{!! Form::text("email", null, ["placeholder"=>"Ingrese el correo del usuario"]) !!}</div>
</div>
<div class="row">
    <div><i class="fas fa-map-marker-alt"></i> {!! Form::label("Direccion:") !!}</div>
    <div>{!! Form::text("address",null, ["placeholder"=>"Ingrese la direccion"]) !!}</div>
</div>
