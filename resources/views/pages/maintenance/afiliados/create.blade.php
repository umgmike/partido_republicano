@extends('pages.layouts.layout')

@section('Title')
  Crear Afiliados
@endsection

@section("scripts")
<script src="{{asset("assets/pages/users/afiliados.js")}}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="row ">
        <div class="col-lg-6 offset-3"> 
            <div class="single-blog-post bg-img mb-80" style="background-image: url({{ asset('uza/img/bg-img/45.jpg') }});">
                <div class="post-content">

                    <div class="card-header">
                        <div class="text-center">
                            <small style="font-size:30px;  color:black">
                                   <strong>SYSTEM-PR</strong><br>
                            </small>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-gray-light">Create</div>
                        </div>
                    </div>

                    <form action="{{ route('afiliados.pr.store') }}" id="afiliadosCreate" method="POST" autocomplete="off">
                    @csrf
                        <div class="card-body">
                            
                            <div class="form-group">
								<label for="nombre1" class="control-label">Primer Nombre: </label>
							    <input type="text" name="nombre1" id="nombre1" class="form-control" placeholder="Ingrese Primer Nombre" value="{{old('nombre1', $item->nombre1 ?? '')}}">
							</div>

							<div class="form-group">
								<label for="nombre2" class="control-label">Segundo Nombre: </label>
							    <input type="text" name="nombre2" id="nombre2" class="form-control" placeholder="Ingrese Segundo Nombre Opcional" value="{{old('nombre2', $item->nombre2 ?? '')}}">
							</div>

							<div class="form-group">
								<label for="nombre3" class="control-label">Tercer Nombre: </label>
							    <input type="text" name="nombre3" id="nombre3" class="form-control" placeholder="Ingrese Tercer Nombre Opcional" value="{{old('nombre3', $item->nombre3 ?? '')}}">
							</div>

							<div class="form-group">
								<label for="apellido1" class="control-label">Primer apellido: </label>
							    <input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="Ingrese Primer apellido" value="{{old('apellido1', $item->apellido1 ?? '')}}">
							</div>

							<div class="form-group">
								<label for="apellido2" class="control-label">Segundo apellido: </label>
							    <input type="text" name="apellido2" id="apellido2" class="form-control" placeholder="Ingrese Segundo apellido Opcional" value="{{old('apellido2', $item->apellido2 ?? '')}}">
							</div>

							<div class="form-group">
								<label for="apellido3" class="control-label">Tercer apellido: </label>
							    <input type="text" name="apellido3" id="apellido3" class="form-control" placeholder="Ingrese Tercer apellido Opcional" value="{{old('apellido3', $item->apellido3 ?? '')}}">
							</div>

							<div class="form-group">
								<label for="dpi" class="control-label">DPI: </label>
							    <input type="number" name="dpi" id="dpi" class="form-control" placeholder="Ingrese DPI" value="{{old('dpi', $item->dpi ?? '')}}">
							</div>

                            <div class="form-group">
							  	<label for="id_puesto" class="control-label">Seleccione Puesto</label>
							   	<div class="input-group input-group-sm">
							       	<select name="id_puesto"  class="form-control select2 tooltipsC"  title="Seleccione departamento">
							        	@if (count($p))
							        		@foreach($p as $item)
							        				<option value="{{$item->id}}">{{$item->puesto}}</option>
							        		@endforeach
							       	    @elseif ($p != '')
							       	        <option value="">No se encuentró ningún registro</option>
							       	    @endif
							       	</select>
							    </div>
							</div>

                            <div class="form-group">
							  	<label for="id_departamento" class="control-label">Seleccione Departamento</label>
							   	<div class="input-group input-group-sm">
							       	<select name="id_departamento"  class="form-control select2 tooltipsC"  title="Seleccione departamento">
							        	@if (count($d))
							        		@foreach($d as $dep)
							        				<option value="{{$dep->id}}">{{$dep->departamento}}</option>
							        		@endforeach
							       	    @elseif ($d != '')
							       	        <option value="">No se encuentró ningún registro</option>
							       	    @endif
							       	</select>
							    </div>
							</div>

							<div class="form-group">
							  	<label for="id_municipio" class="control-label">Seleccione Municipio</label>
							   	<div class="input-group input-group-sm">
							       	<select name="id_municipio"  class="form-control select2 tooltipsC"  title="Seleccione departamento">
							        	@if (count($m))
							        		@foreach($m as $muni)
							        				<option value="{{$muni->id}}">{{$muni->municipio}}</option>
							        		@endforeach
							       	    @elseif ($m != '')
							       	        <option value="">No se encuentró ningún registro</option>
							       	    @endif
							       	</select>
							    </div>
							</div>

							<div class="form-group">
								<label for="telefono1" class="control-label">telefono: </label>
							    <input type="number" name="telefono1" id="telefono1" class="form-control" placeholder="Ingrese telefono">
							</div>

							<div class="form-group">
								<label for="telefono2" class="control-label">telefono alternativo: </label>
							    <input type="number" name="telefono2" id="telefono2" class="form-control" placeholder="Ingrese telefono alternativo">
							</div>

							<div class="form-group">
								<label for="email" class="control-label">E-mail: </label>
							    <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese correo electronico">
							</div>

							<div class="form-group">
								<label for="direccion" class="control-label">Dirección: </label>
              					<textarea type="text" id="direccion" rows="6" name="direccion" class="form-control" placeholder="Escriba direccion" title="Escriba direccion"></textarea required>
							</div>

							<div class="form-group">
								<label for="esafiliado" class="control-label"> ¿ Es afilido ? </label>
								<input type="checkbox" id="esafiliado" name="esafiliado">
							</div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-info mt-40" aria-hidden="true" class="tooltipsC" title="Guardar registro"> Guardar </button>
                                <button type="reset" class="btn btn-outline-success mt-40">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="" class="btn btn-success btn-block "></a>
            </div>
        </div>
    </div>
@endsection