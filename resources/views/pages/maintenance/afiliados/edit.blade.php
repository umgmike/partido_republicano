@extends('pages.layouts.layout')

@section('Title')
	Editar usuario
@endsection

@section("scripts")
<script src="{{asset("assets/pages/users/afiliados.js")}}" type="text/javascript"></script>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 offset-2">
            <div class="single-blog-post bg-img mb-80" style="background-image: url({{ asset('uza/img/bg-img/45.jpg') }});">
                <div class="post-content">

                    <div class="card-header">
                        <small style="font-size:30px;  color:black">
                            <strong>Edición de afiliados</strong><br>
                        </small>
                    </div>

                    <div class="card-body">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-gray-light">Edit</div>
                        </div>
                    </div>

                    <form action="{{route('afiliados.pr.update', [$registro->id])}}"  id="afiliadosCreate" method="POST" autocomplete="off">
                    @csrf 
                    @method("put")

                        <div class="card-body">

                            <div class="form-group ">
                                <label for="nombre1" class="col-form-label">Editar primer nombre</label>
                                <input type="text" name="nombre1" class="form-control" id="nombre1" class="form-control" value="{{old('nombre1', $registro->nombre1 ?? '')}}">
                            </div>

                            <div class="form-group ">
                                <label for="nombre2" class="col-form-label">Editar segundo nombre</label>
                                <input type="text" name="nombre2" class="form-control" id="nombre2" class="form-control" value="{{old('nombre2', $registro->nombre2 ?? '')}}">
                            </div>

                            <div class="form-group ">
                                <label for="nombre3" class="col-form-label">Editar tercer nombre</label>
                                <input type="text" name="nombre3" class="form-control" id="nombre3" class="form-control" value="{{old('nombre3', $registro->nombre3 ?? '')}}">
                            </div>


                            <div class="form-group ">
                                <label for="apellido1" class="col-form-label">Editar primer apellido</label>
                                <input type="text" name="apellido1" class="form-control" id="apellido1" class="form-control" value="{{old('apellido1', $registro->apellido1 ?? '')}}">
                            </div>

                            <div class="form-group ">
                                <label for="apellido2" class="col-form-label">Editar segundo apellido</label>
                                <input type="text" name="apellido2" class="form-control" id="apellido2" class="form-control" value="{{old('apellido2', $registro->apellido2 ?? '')}}">
                            </div>

                            <div class="form-group ">
                                <label for="apellido3" class="col-form-label">Editar tercer apellido</label>
                                <input type="text" name="apellido3" class="form-control" id="apellido3" class="form-control" value="{{old('apellido3', $registro->apellido3 ?? '')}}">
                            </div>


                            <div class="form-group ">
                                <label for="dpi" class="col-form-label">Editar DPI</label>
                                <input type="text" name="dpi" class="form-control" id="dpi" class="form-control" value="{{old('dpi', $registro->dpi ?? '')}}">
                            </div>

                            <div class="form-group">
                                <label for="id_puesto" class="control-label">Editar puesto</label>
                                <div class="input-group input-group-sm">
                                    <select name="id_puesto"  class="form-control select2 tooltipsC"  title="Editar Puesto">
                                        @if (count($pue))
                                            @foreach($pue as $item)
                                                <option 
                                                    {{$registro->id_puesto == $item->id ? 'selected': ''}}
                                                    value="{{$item->id}}">{{$item->puesto}} 
                                                </option>
                                            @endforeach
                                        @elseif ($pue != '')
                                            <option value="">No se encuentró ningún registro</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_departamento" class="control-label">Editar departamento</label>
                                <div class="input-group input-group-sm">
                                    <select name="id_departamento"  class="form-control select2 tooltipsC"  title="Editar Puesto">
                                        @if (count($depto))
                                            @foreach($depto as $item)
                                                <option 
                                                    {{$registro->id_departamento == $item->id ? 'selected': ''}}
                                                    value="{{$item->id}}">{{$item->departamento}} 
                                                </option>
                                            @endforeach
                                        @elseif ($depto != '')
                                            <option value="">No se encuentró ningún registro</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_municipio" class="control-label">Editar municipio</label>
                                <div class="input-group input-group-sm">
                                    <select name="id_municipio"  class="form-control select2 tooltipsC"  title="Editar Puesto">
                                        @if (count($muni))
                                            @foreach($muni as $item)
                                                <option 
                                                    {{$registro->id_municipio == $item->id ? 'selected': ''}}
                                                    value="{{$item->id}}">{{$item->municipio}} 
                                                </option>
                                            @endforeach
                                        @elseif ($muni != '')
                                            <option value="">No se encuentró ningún registro</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="telefono1" class="col-form-label">Editar telefono</label>
                                <input type="text" name="telefono1" class="form-control" id="telefono1" class="form-control" value="{{old('telefono1', $registro->telefono1 ?? '')}}">
                            </div>

                            <div class="form-group ">
                                <label for="telefono2" class="col-form-label">Editar telefono alternativo</label>
                                <input type="text" name="telefono2" class="form-control" id="telefono2" class="form-control" value="{{old('telefono2', $registro->telefono2 ?? '')}}">
                            </div>


                            <div class="form-group ">
                                <label for="email" class="col-form-label">Editar email</label>
                                <input type="email" name="email" class="form-control" id="email" class="form-control" value="{{old('email', $registro->email ?? '')}}">
                            </div>


                            <div class="form-group">
                                <label for="direccion">Editar Dirección</label>
                                <textarea type="text" name="direccion" id="direccion" class="form-control" rows="3">{{old('direccion', $registro->direccion ?? '')}}</textarea>
                              </div>
                        	
                        </div>
                        <div class="text-center">
                            <button type="submit" class="col-lg-4 btn btn-outline-success mt-40 ">Actualizar</button>
                        </div>
                    </form>
                </div>
                <a href="" class="btn btn-primary btn-block "></a>
            </div>
        </div>

    </div>
</div>
@endsection
