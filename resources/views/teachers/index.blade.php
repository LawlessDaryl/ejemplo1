<html>
    <head>
        <title>Vista Profesor</title>
    </head>

    <body>
        <h1>Listado profesores</h1>

        <table>
            <tr>
                <td>PROFESOR</td>
                <td>PROFESION</td>
                <td>GRADO ACADEMICO</td>
                <td>CELULAR</td>
            </tr>

                @foreach ($teachers as $profe)
                <tr>
                    <td>{{$profe->full_name}}</td>
                    <td>{{$profe->profession}}</td>
                    <td>{{$profe->grade_academy}}</td>
                    <td>{{$profe->cell_phone}}</td>                    
                </tr>
                @endforeach
            
        </table>
    </body>
</html>