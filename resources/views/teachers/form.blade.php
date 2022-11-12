<html>
    <head>
        <title>Vista Profesor</title>
    </head>

    <body>
        <h1>Nuevo Profesor</h1>

        <form action="{{route('teachers.store')}}" method="POST">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="full_name">
            <label for="">Profesion</label>
            <input type="text" name="profession">
            <label for="">Grado Academico</label>
            <input type="text" name="grade_academy">
            <label for="">Celular</label>
            <input type="text" name="cell_phone">

            <button type="submit">Guardar</button>
        </form>
    </body>
</html>