@csrf
<div style="display: flex; 
      flex-direction: column; 
      justify-content: center; 
      align-items: center;
      background-color: gray;
      color: white; 
      width: 40%;"
    >
  <div>
    <div style="display: flex; 
          flex-direction: column; 
          justify-content: left;
          "
        >
      <div class="">
        <label for="customFile"> Seleccione archivo </label>
        <input type="file" name="image" id="custom-file">
      </div>
      <div>
          <label for="titulo" > Nombre del servicio </label>
          <input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}"> 
          {{-- {{ $errors->first('titulo') }} --}}
      </div>

      <div>
        <label for="descripcion"> Descripción del servicio </label>
          <input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}">
          {{-- {{ $errors->first('descripcion') }} --}}
      </div>
      
      <button class="btn-create"> {{ $btnText }} </button>
    </div>
  </div>
</div>
