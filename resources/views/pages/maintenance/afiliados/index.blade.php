@extends('pages.layouts.layout')

@section('Title')
  Afiliados
@endsection

@section("scripts")
  <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection 

@section('content')

  <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <a href=" {{ route('afiliados.pr.create') }} " class="btn btn-info btn-block tooltipsC" title="Crear nuevo afiliado">
          <i class="fa fa-fw fa-plus-circle"></i> Crear nuevo afiliado
        </a>
      </div>
    </div><br>
    <div class="single-portfolio-slide">
     <div class="card"> 
      <div class="card-header">
        <div class="text-center">
              <small style="font-size:30px;  color:black">
                <strong>AFILIADOS | PR</strong>
              </small>
        </div>
      </div>

      <div class="card-body">
        <div class="ribbon-wrapper ribbon-lg">
            <div class="ribbon bg-gray-light">Afiliados</div>
        </div>

        <table class="table" id="TableStyle">
          <thead>
            <tr>
              <th>Es Afiliado</th>
              <th>Nombres y Apellidos</th>
              <th>DPI</th>
              <th>Puesto</th>
              <th>Departamento</th>
              <th>Municipio</th>
              <th>Teléfono 1</th>
              <th>Teléfono 2</th>
              <th>E-Mail</th>
              <th>Dirección</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($afiliados as $h)
              <tr>
                @if ($h->esafiliado == 1)
                    <td class="text-center">
                      <div class="icheck-primary" >
                        <input type="checkbox" id="esafiliado" checked class=" tooltipsC" title="{{ $h->nombre1 }} Afiliado">
                      </div>
                    </td>
                @elseif ($h->esafiliado == 0)
                    <td class="text-center">
                      <div class="icheck-primary">
                        <input type="checkbox" id="esafiliado" class=" tooltipsC" title="{{ $h->nombre1 }} No Afiliado">
                      </div>
                    </td>
                @endif  
                <td>  {{ $h->nombre1 }} {{ $h->nombre2 }} {{ $h->nombre3 }} {{ $h->apellido1 }} {{ $h->apellido2 }}</td>
                <td>  {{ $h->dpi }} </td>
                <td>  {{ $h->puesto }} </td>
                <td>  {{ $h->departamento }} </td>
                <td>  {{ $h->municipio }} </td>
                @if($h->telefono1 === null)
                  <td> No Tiene </td>
                @else
                  <td>  {{ $h->telefono1 }} </td>
                @endif

                @if($h->telefono2 === null)
                  <td> No Tiene </td>
                @else
                  <td>  {{ $h->telefono2 }} </td>
                @endif

                @if($h->email === null)
                  <td> No Tiene </td>
                @else
                  <td>  {{ $h->email }} </td>
                @endif

                <td>  {{ $h->direccion }} </td>
                <td>  
                  <a href="{{route('afiliados.pr.edit', ['id' => $h->id])}}" class=" tooltipsC" title="Editar registro">
                    <i class="fa fa-edit btn btn-outline-secondary btn-sm"></i>
                  </a>

                  <form action="{{route('afiliados.pr.delete', ['id' => $h->id])}}" class="d-inline form-eliminar" method="POST">
                    @csrf @method("delete")
                    <button type="submit" class="btn btn-outline-danger btn-sm  btn-accion-tabla eliminar tooltipsC" title="Eliminar registro">
                      <i class="fa fa-trash"></i>
                     </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Es Afiliado</th>
              <th>Nombres y Apellidos</th>
              <th>DPI</th>
              <th>Puesto</th>
              <th>Departamento</th>
              <th>Municipio</th>
              <th>Teléfono 1</th>
              <th>Teléfono 2</th>
              <th>E-Mail</th>
              <th>Dirección</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <a href="" class="btn btn-success btn-block "></a>
    </div>
    </div>
  </div>
@endsection
