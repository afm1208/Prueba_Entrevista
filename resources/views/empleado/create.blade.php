@extends('layouts.app')

@section('content')
<div class="container">


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    </head>

    <body>

        <form action="{{url('/empleado')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Seleccione su pais de nacimiento:</label>
                <select id="lista1" name="lista1" class="form-control" required>
                    <option value="0">Ciudad de nacimiento</option>
                    <option value="1">Colombia</option>
                    <option value="2">Argentina</option>
                    <option value="3">Mexico</option>
                </select>
                <br>
                <div id="Ciudad_nacimiento" class="form-control"></div>
            </div>
            @include('empleado.form')


        </form>

    </body>

    </html>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#lista1').val(1);
        recargarLista();

        $('#lista1').change(function() {
            recargarLista();
        });
    })
    </script>
    <script type="text/javascript">
    function recargarLista() {
        $.ajax({
            type: "POST",
            url: "../../php/datos.php",
            data: "pais=" + $('#lista1').val(),
            success: function(r) {
                $('#Ciudad_nacimiento').html(r);
            }
        });
    }
    </script>

    <!-- <form action="" method="post">
    <input type="Nombres" placeholder="Nombres" name="Nombres" id="Nombres">
    <input type="Apellidos" placeholder="Apellidos" name="Apellidos" id="Apellidos">
    <input type="Identificacion" placeholder="ID" name="Identificacion" id="Identificacion">
    <input type="Direccion" placeholder="Direccion" id="Direccion" name="Direccion">
    <input type="Telefono" placeholder="Telefono" name="Telefono" id="Telefono">
    |

</form> -->
</div>
@endsection