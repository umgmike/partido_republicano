@extends('pages.layouts.layout')

@section('Title')
  Roles
@endsection


@section('content')

  @section('nombre_ruta', 'Apartado de roles de usuarios')
  @section('dashboard_nombre', 'Listado general')
  @section('dashboard_ruta', route('page.rols-user'))
  @include('pages.navbar.button-thirth')


	<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
    <div class="single-portfolio-slide">
     <div class="card"> 
      <div class="card-header">
        <div class="text-center">
              <small style="font-size:30px;  color:black">
                <strong>CATÁLOGO DE ROLES | PARTIDO REPUBLICANO</strong>
              </small>
        </div>
        <div class="dropdown notifications-menu text-center"><b>Cantidad de registros :</b>
            <a data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">@if (count($roles) == 1) {{count($roles)}} registro </li>
              <li class="header text-center">@elseif (count($roles) == '') {{count($roles)}} ningun registro</li>
              <li class="header text-center">@elseif (count($roles) != '') {{count($roles)}} registros</li> @endif
            </ul>
        </div>
      </div>

      <div class="card-body">
        <div class="ribbon-wrapper ribbon-lg">
            <div class="ribbon bg-info">Roles</div>
        </div>

        <table class="table" id="TableStyle">
          <thead>
            <tr>
              <th scope="col" class="txt-center">#</th>
              <th scope="col" class="txt-center">Rol</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($roles as $item)
              <tr>
                <td>  {{ $item->id }}   </td>
                <td>  {{ $item->nombre_rol }}   </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th scope="col" class="txt-center">#</th>
              <th scope="col" class="txt-center">Rol</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <a href="" class="btn btn-primary btn-block "></a>
    </div>
    </div>
  </div>
@endsection