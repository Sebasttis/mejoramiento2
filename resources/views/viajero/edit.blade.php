<form action="{{route('viajero.update', $viajero)}}"  method="POST">

    @csrf
    @method('put')
    
    </label>
    <br>
    <label>
    DNI del viajero:
    <br>
    <input name="dni" type="text" value="{{old('dni',$viajero-> dni)}}">
    <br>
    </label>
    <br>
    <label>
    Nombre:
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$viajero-> nombre)}}">
    <br>
    </label>
    <br>
    <label>
    Direccion:
    <br>
    <input name="direccion" type="text" value="{{old('direccion',$viajero-> direccion)}}">
    <br>
    </label>
    <br>
    Telefono:
    <br>
    <input name="telefono" type="text" value="{{old('telefono',$viajero-> telefono)}}">
    <br>
    <button  type="submit">Actualizar</button>
   
</form>