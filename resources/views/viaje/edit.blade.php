<form action="{{route('viaje.update', $viaje)}}"  method="POST">

    @csrf
    @method('put')
    
    </label>
    <br>
    <label>
    Codigo del viaje:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$viaje-> codigo)}}">
    <br>
    </label>
    <br>
    <label>
    Numero de plazas:
    <br>
    <input name="numplazas" type="text" value="{{old('numplazas',$viaje-> numplazas)}}">
    <br>
    </label>
    <br>
    <label>
    Fecha:
    <br>
    <input name="fecha" type="text" value="{{old('fecha',$viaje-> fecha)}}">
    <br>
    </label>
    <br>
    Otros datos:
    <br>
    <input name="otrosdatos" type="text" value="{{old('otrosdatos',$viaje-> otrosdatos)}}">
    <br>
    <button  type="submit">Actualizar</button>
   
</form>