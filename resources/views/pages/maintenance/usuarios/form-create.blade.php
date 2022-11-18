<div class="form-group">
  	<label for="id_rol" class="control-label">Seleccione rol</label>
   	<div class="input-group input-group-sm">
       	<select name="id_rol"  class="form-control select2 tooltipsC"  title="Seleccione categoría">
        	@if (count($roles))
        		@foreach($roles as $item)
        				<option value="{{$item->id}}">{{$item->nombre_rol}}</option>
        		@endforeach
       	    @elseif ($roles != '')
       	        <option value="">No se encuentró ningún registro</option>
       	    @endif
       	</select>
    </div>
</div>

<div class="form-group" >
    <label for="nombre" class="control-label">Nombre Usuario: </label>
    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese nombre usuario"
    value="{{old('nombre', $item->nombre ?? '')}}">
</div>

<div class="form-group" >
    <label for="apellido" class="control-label">Apellido Usuario: </label>
    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese apellido usuario"
    value="{{old('apellido', $item->apellido ?? '')}}">
</div>

<div class="form-group">
    <label for="id_genero" class="control-label">Seleccione género</label>
    <div class="input-group input-group-sm">
        <select name="id_genero"  class="form-control select2 tooltipsC"  title="Seleccione categoría">
            @if (count($geberos_list))
                @foreach($geberos_list as $item)
                        <option value="{{$item->id}}">{{$item->genero}}</option>
                @endforeach
            @elseif ($geberos_list != '')
                <option value="">No se encuentró ningún registro</option>
            @endif
        </select>
    </div>
</div>

<div class="form-group">
	<label for="usuario" class="control-label">Usuario: </label>
    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese usuario"
    value="{{old('usuario', $item->usuario ?? '')}}">
</div>

<div class="form-group">
    <label for="password" class="col-form-label {{!isset($item) ? 'required' : ''}}">Contraseña</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese contraseña" value="" {{!isset($item) ? 'required' : ''}} minlength="8">
</div>


<div class="form-group">
    <label for="re_password" class="col-form-label {{!isset($item) ? 'required' : ''}}">Confirme contraseña</label>
    <input type="password" name="re_password" id="re_password" class="form-control" placeholder="Repita contraseña" value="" {{!isset($item) ? 'required' : ''}} minlength="8">
</div>