<div class="row">
    <div><i class="fas fa-user"></i> {!! Form::label("Nombre:") !!}</div>
    <div>{!! Form::text("name", null, ["placeholder"=>"Ingrese el nombre de usuario"]) !!}</div>
</div>
<div class="row">
    <div><i class="fas fa-address-card"></i> {!! Form::label("Rol:") !!}</div>
    <div>{!! Form::select('rol' ,array( '0' => 'Administrador', '1' => 'Vendedor')) !!}</div>
</div>
<div class="row">
    <div><i class="fas fa-envelope-open-text"></i> {!! Form::label("Correo:") !!}</div>
    <div>{!! Form::text("email", null, ["placeholder"=>"Ingrese el correo del usuario"]) !!}</div>
</div>
<div class="row">
    <div><i class="fas fa-key"></i> {!! Form::label("Contraseña:") !!}</div>
    <div>{!! Form::password("password", ["placeholder"=>"Ingrese la contraseña"]) !!}</div>
</div>
