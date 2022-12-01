<head>
    <meta charset="utf-8">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

</head>

@if(count($errors)> 0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach
    </ul>

</div>

@endif
<div class="form-group">
    <label for="Nombres">Nombre</label>
    <input type="Nombres" class="form-control" value="{{isset($empleado->Nombres)?$empleado->Nombres:old('Nombre')}}"
        placeholder="Nombres" name="Nombres" id="Nombres">

</div>


<div class="form-group">
    <label for="Apellidos">Apellidos</label>
    <input type="Apellidos" class="form-control"
        value="{{isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos')}}" placeholder="Apellidos"
        name="Apellidos" id="Apellidos">
</div>

<div class="form-group">
    <label for="Identificacion">Identificacion</label>
    <input type="Identificacion" class="form-control"
        value="{{isset($empleado->Identificacion)?$empleado->Identificacion:old('Identificacion')}}" placeholder="ID"
        name="Identificacion" id="Identificacion">
</div>


<div class="form-group">
    <label for="Direccion">Direccion</label>
    <input type="Direccion" class="form-control"
        value="{{isset($empleado->Direccion)?$empleado->Direccion:old('Direccion')}}" placeholder="Direccion"
        id="Direccion" name="Direccion">
</div>



<div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="Telefono" class="form-control"
        value="{{isset($empleado->Telefono)?$empleado->Telefono:old('Telefono')}}" placeholder="Telefono"
        name="Telefono" id="Telefono">
    <br>
</div>




<input type="submit" value="Guardar" class="btn btn-success">

<a href="{{url('empleado')}}" class="btn btn-danger">Volver</a>