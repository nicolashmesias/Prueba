
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

    <title>Curso</title>
    
</head>

<body>
    
    <h1>Curso</h1>
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
                    @if(isset($curso))
                    <tr>
                        <td>{{ $curso->id }}</td>
                        <td>{{ $curso->name }}</td>
                        <td>{{ $curso->description }}</td>
                    </tr>
                    @else
                    
                @endif
                    
            </tbody>
            </table>
            
            
    </div>
    <br>
    <br>
    
    
</body >

</html>
