@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-warning  alert-dismissible" role="alert">


        {{Session::get('mensaje')}}

        
    </div>
    @endif

    <a href="{{url('empleado/create')}}" class="btn btn-success">Registrar Nuevo Empleado</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Identificacion</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Ciudad_nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>


            @foreach($empleados as $empleado)

            <tr>
                <td> {{$empleado->id}} </td>
                <td>{{$empleado->Nombres}}</td>
                <td>{{$empleado->Apellidos}}</td>
                <td>{{$empleado->Identificacion}}</td>
                <td>{{$empleado->Direccion}} </td>
                <td>{{$empleado->Telefono}}</td>
                <td>{{$empleado->Ciudad_nacimiento}}</td>
                <td>
                    <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">
                        Editar
                    </a>



                    <form action="{{url('/empleado/'.$empleado->id)}}" class="d-inline" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar"
                            class="btn btn-danger">
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection