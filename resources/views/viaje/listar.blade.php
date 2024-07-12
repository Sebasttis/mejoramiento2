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

    @foreach ($viaj as $viaje)
    <tr>
        <br>
        
        <td>{{$viaje->codigo}}</td>
        <td>{{$viaje->numplazas}}</td>
        <td>{{$viaje->fecha}}</td>
        <td>{{$viaje->otrosdatos}}</td>
    
        
        <td><a href="{{route('viaje.show',$viaje->id)}}">Detalle</a></td>
        <td><a href="{{route('viaje.edit',$viaje->id)}}">Editar</a></td>
        <form action="{{route('viaje.destroy',$viaje->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <br>
       
       
    </tr>
@endforeach
   
</body>
</html>