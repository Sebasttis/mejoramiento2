<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de viaje</h1>

    @foreach ($viaj as $viajero)
    <tr>
        <br>
        
        <td>{{$viajero->dni}}</td>
        <td>{{$viajero->nombre}}</td>
        <td>{{$viajero->direccion}}</td>
        <td>{{$viajero->telefono}}</td>
    
        
        <td><a href="{{route('viajero.show',$viajero->id)}}">Detalle</a></td>
        <td><a href="{{route('viajero.edit',$viajero->id)}}">Editar</a></td>
        <form action="{{route('viajero.destroy',$viajero->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <br>
       
       
    </tr>
@endforeach
   
</body>
</html>