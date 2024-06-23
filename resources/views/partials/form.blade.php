@csrf
<label for="titulo" value="Nombre del servicio">
<input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}"> 
{{-- {{ $errors->first('titulo') }} --}}
<label for="descripcion" value="Descripcion del servicio">
<input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}">
{{-- {{ $errors->first('descripcion') }} --}}
<button class="btn-create"> {{ $btnText }} </button>