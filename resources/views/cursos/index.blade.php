
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #columnas {
    width: 100%;    
    border-collapse: collapse;
    font-weight: normal;
    font-size: 12px;
}

#columnas th{
    text-align: center;
    color: white;
    background-color: rgb(21, 117, 124);
}

#columnas tr:nth-child(even){
    background-color:#ddd;
}

#columnas th, td{
    border:1px solid #ddd;
    padding: 20px;
    padding-top: 8px;    
    padding-bottom: 8px;
}
    </style>

    <title>Cursos</title>
    
</head>

<body>
    
    <h1>Lista de Cursos</h1>
    <div id='columnas'>       
            
            <table>
                <thead>
                    <tr>
                        <th>N.</th>
                        <th>Nombre</th>
                        <th>Descripción:</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($curso as $curso) 
                    <tr>
                        <td>{{$curso->id}} </td>
                        <td>{{$curso->name}}</td>
                        <td>{{$curso->description}} </td>
                        <td> <a href="{{route('cursos.show', $curso->id)}}">Mostrar</a> </td>
                        <td>
                            <form action="{{route('cursos.destroy',$curso->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Eliminar</button>
                            </form>  

                    </td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
            
            
    </div>
    <br>
    <br>
    <a href="{{route('cursos.create')}}">Agregar Curso</a>
    
    
</body >

</html>
