<div class="form-group">
    <label for="id_rol" class="control-label">Editar rol</label>
    <div class="input-group input-group-sm">
        <select name="id_rol"  class="form-control select2 tooltipsC"  title="Seleccione categoría">
            @if (count($roles_r))
                @foreach($roles_r as $ru)
                	<option 
	                    {{$registro->id_rol == $ru->id ? 'selected': ''}}
	                    value="{{$ru->id}}">{{ $ru->nombre_rol }} 
	                </option>
                @endforeach
            @elseif ($roles_r != '')
                <option value="">No se encuentró ningún registro</option>
            @endif
        </select>
    </div>
</div>

<div class="form-group ">
	<label for="nombre" class="col-form-label">Editar nombre usuario : </label>
    <input type="text" name="nombre" class="form-control" id="nombre" class="form-control" value="{{old('nombre', $registro->nombre ?? '')}}">
</div>

<div class="form-group ">
    <label for="apellido" class="col-form-label">Editar apellido usuario : </label>
    <input type="text" name="apellido" class="form-control" id="apellido" class="form-control" value="{{old('apellido', $registro->apellido ?? '')}}">
</div>


<div class="form-group">
    <label for="id_genero" class="control-label">Editar Género</label>
    <div class="input-group input-group-sm">
        <select name="id_genero"  class="form-control select2 tooltipsC"  title="Seleccione género">
            @if (count($generos_r))
                @foreach($generos_r as $gu)
                    <option 
                        {{$registro->id_genero == $gu->id ? 'selected': ''}}
                        value="{{$gu->id}}">{{$gu->genero}} 
                    </option>
                @endforeach
            @elseif ($generos_r != '')
                <option value="">No se encuentró ningún registro</option>
            @endif
        </select>
    </div>
</div>

<div class="form-group ">
    <label for="usuario" class="col-form-label">Editar usuario : </label>
    <input type="text" name="usuario" class="form-control" id="usuario" class="form-control" value="{{old('usuario', $registro->usuario ?? '')}}">
</div>


<div class="text-center">
   <button type="button" class="btn btn-danger mt-40" id="btn_cambiar">Desea cambiar contraseña?</button>
</div><br>

