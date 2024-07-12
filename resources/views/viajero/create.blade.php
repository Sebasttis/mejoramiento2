<form action="{{route('viajero.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
      
        <br>
       
        DNI del viajero:
        <br>
        <input type="text" name="dni">
    </label>
   
    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
   
    <br>
    <label>
        Direccion:
        <br>
        <input type="text" name="direccion">
    </label>
   
    <br>
    <label>
        Telefono:
        <br>
        <input type="text" name="telefono">
    </label>
   
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>
   