@extends('pages.layouts.layout')

@section('Title')
  Empresas
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('content')
  @section('nombre_ruta', 'Listado de empresas')
  @section('dashboard_nombre', 'Listado general')
  @section('dashboard_ruta', route('pages.list-general'))
  @include('pages.navbar.button-secondary')

	<div class="portfolio-menu text-center mb-30">
    	<div class="col-lg-3">
      		<a href="{{ route('page.create-users') }}" class="btn btn-primary btn-block tooltipsC" title="Crear nuevo usuario">
        		<i class="fa fa-fw fa-plus-circle"></i> Crear nuevo usuario
      		</a>
    	</div>
  	</div>

    @include('includes.form-error')
    @include('includes.mensaje')

	<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
    <div class="single-portfolio-slide">
     <div class="card"> 
      <div class="card-header">
        <div class="text-center">
              <small style="font-size:30px;  color:black">
                <strong>CATÁLOGO DE USUARIOS | PARTIDO REPUBLICANO</strong>
              </small>
        </div>
        <div class="dropdown notifications-menu text-center"><b>Cantidad de registros :</b>
            <a data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">@if (count($users) == 1) {{count($users)}} registro </li>
              <li class="header text-center">@elseif (count($users) == '') {{count($users)}} ningun registro</li>
              <li class="header text-center">@elseif (count($users) != '') {{count($users)}} registros</li> @endif
            </ul>
        </div>
      </div>

      <div class="card-body">
        <div class="ribbon-wrapper ribbon-lg">
            <div class="ribbon bg-gray-light">Companies</div>
        </div>

        <table class="table" id="TableStyle">
          <thead>
            <tr>
              <th scope="col" class="txt-center">#</th>
              <th scope="col" class="txt-center">Nombre Completo</th>
              <th scope="col" class="txt-center">Usuario</th>
              <th scope="col" class="txt-center">Rol</th>
              <th scope="col" class="txt-center">Género</th>
              <th scope="col" class="txt-center">Estado</th>
              <th scope="col" class="txt-center">Acciones</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($users as $item)
              <tr>
                <td>  {{ $item->id }}   </td>
                <td>  {{ $item->nombre }}  {{ $item->apellido }}  </td>
                <td>  {{ $item->usuario }} </td>
                <td>  {{ $item->roles->nombre_rol}}   </td>
                <td>  {{ $item->generos_users->genero}}  </td>
                <td>
                  @if($item->estado == 1)
                    <button type="submit" class="btn btn-outline-info btn-sm tooltipsC" title="Registro activo">
                      <i class="fa fa-check-circle-o"> Activo</i>
                    </button>
                  @elseif($item->estado == 0)
                    <button type="submit" class="btn btn-outline-danger btn-sm  tooltipsC" title="Registro Inactivo">
                      <i class="fa fa-times-circle-o"> Inactivo</i>
                    </button>
                  @endif
                </td>

                <td class="text-center">
                  @if($item->estado == 1)
                      <a href="{{ route('page-edit.users', ['id' => $item->id])}}" class=" tooltipsC" title="Editar registro">
                        <i class="fa fa-edit btn btn-outline-info btn-sm"></i>
                      </a>
                  @endif

                  @if($item->estado == 1)
                    <form action="{{route('page.delete', ['id' => $item->id])}}" class="d-inline form-eliminar" method="POST">
                      @csrf @method("delete")
                      <button type="submit" class="btn btn-outline-danger btn-sm  btn-accion-tabla eliminar tooltipsC" title="Desactivar registro">
                          <i class="fa fa-trash"></i>
                      </button>
                    </form>

                  @else
                    <form action="{{route('page.delete', ['id' => $item->id])}}" class="d-inline form-eliminar" method="POST">
                      @csrf @method("delete")
                      <button type="submit" class="btn btn-outline-success btn-sm  btn-accion-tabla eliminar tooltipsC" title="Activar registro">
                        <i class="fa fa-recycle"></i>
                       </button>
                     </form>
                  @endif
                </td>

              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th scope="col" class="txt-center">#</th>
              <th scope="col" class="txt-center">Nombre Completo</th>
              <th scope="col" class="txt-center">Usuario</th>
              <th scope="col" class="txt-center">Rol</th>
              <th scope="col" class="txt-center">Género</th>
              <th scope="col" class="txt-center">Estado</th>
              <th scope="col" class="txt-center">Acciones</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <a href="" class="btn btn-primary btn-block "></a>
    </div>
    </div>
  </div>
@endsection