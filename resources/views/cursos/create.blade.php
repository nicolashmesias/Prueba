
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar</title>
</head>
<body>
    <h1>Agregar Cursos</h1>
    <form action="{{Route('cursos.store')}}" method="POST">
    @csrf
    <label for="name">Nombre:</label><br>
    <input type="text" id="name" name="name"><br>
    
    <label for="description">Descripción:</label><br>
    <textarea id="description" name="description"></textarea><br>
    
    <button type="submit">Agregar Curso</button>

    </form>
    
</body>
</html>

