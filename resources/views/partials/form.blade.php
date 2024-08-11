@csrf
<div style="display: flex; 
      flex-direction: column; 
      justify-content: center; 
      align-items: center;
      background-color: gray;
      color: white; 
      width: 40%;"
    >
  <div style="margin: 15px 0px">
    <div style="display: flex; 
          flex-direction: column; 
          justify-content: left;
          "
        >
      <div style="margin-bottom: 10px">

        <label for="customFile"> Seleccione archivo </label>
        <input type="file" name="image" id="custom-file">

      </div>

      <div style="margin-bottom: 10px">

          <label for="category_id" > Categoría </label>
          <select name="category_id" id="category_id">
            <option value=""> Seleccione categoría </option>
            @foreach ($categories as $id=>$name)

              <option value="{{ $id }}" 
              @if($id == (old('category_id', $servicio->category_id)))
                selected
              @endif
              > {{ $name }}
              </option>
              
            @endforeach
            
          </select>

      </div>

      <div style="margin-bottom: 10px" >
        <label for="titulo" > Nombre del servicio </label>
        <input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}"> 
        {{-- {{ $errors->first('titulo') }} --}}
      </div>



      <div style="margin-bottom: 10px"> 
        <label for="descripcion"> Descripción del servicio </label>
          <input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}">
          {{-- {{ $errors->first('descripcion') }} --}}
      </div>
      
      <button class="btn-create"> {{ $btnText }} </button>
    </div>
  </div>
</div>
