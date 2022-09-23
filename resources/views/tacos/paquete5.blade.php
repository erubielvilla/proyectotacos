@extends('tacos.template')
@section('views_content')
<html>

    <head>
        <title></title>
    </head>

    <body>
      <div style="text-align:center;">
        <table width="250"   class="table">
            <tr height="80">
                <td width="300" rowspan="2"><img src="{{ asset('img/paquete1.jpg') }}" width="300px" height="300px" alt=""></td>
                <td colspan="2">
                    <h4>
                        <b> Paquete 5</b>
                    </h4>
                </td>
            </tr>
            <tr height="100">
                <td>
                    <h5>
                        <b> 
                            Descripción corta
                        </b>
                    </h5><br>
                    <p>Incluye dos tacos al pastor y una coca</p>
                </td>
                <td>
                @if(auth()->check())
                    <button class="btn btn-secondary"><a href="{{ URL::previous() }}">Regresar</a></button>
                    <button class="btn btn-primary">Pedir</button>
                @else
                    <button>Iniciar sesión</button>
                @endif
                </td>
            </tr>
        </table>
      </div>
    </body>
</html>
@stop