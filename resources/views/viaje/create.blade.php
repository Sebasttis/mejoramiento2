<form action="{{route('viaje.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
      
        <br>
       
        Codigo del viaje:
        <br>
        <input type="text" name="codigo">
    </label>
   
    <br>
    <label>
        Numero de plazas:
        <br>
        <input type="text" name="numplazas">
    </label>
   
    <br>
    <label>
        Fecha:
        <br>
        <input type="text" name="fecha">
    </label>
   
    <br>
    <label>
        Otros datos:
        <br>
        <input type="text" name="otrosdatos">
    </label>
   
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>
   