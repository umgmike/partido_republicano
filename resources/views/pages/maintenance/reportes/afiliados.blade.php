<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="SYS-JOHHAN">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ Auth::user()->nombre }} | PARTIDO REPUBLICANO</title>
    <style>

      body {
            margin: 0.1cm 0.1cm 0.1cm;
      }

      table {
        border-collapse: collapse;
      }

      .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        background-color: transparent;
        font-size: 12px;
      }

      .table th,
      .table td {
        padding: 0.97rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
        padding: 0.3rem;
      }

      .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
      }

      .table tbody + tbody {
        border-top: 2px solid #dee2e6;
      }

      .table-sm th,
      .table-sm td {
        padding: 0.3rem;
      }

      .table-bordered {
        border: 1px solid #dee2e6;
      }

      .table-bordered th,
      .table-bordered td {
        border: 1px solid #dee2e6;
      }

      .table-bordered thead th,
      .table-bordered thead td {
        border-bottom-width: 2px;
      }

      .table-borderless th,
      .table-borderless td,
      .table-borderless thead th,
      .table-borderless tbody + tbody {
        border: 0;
      }

      .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
      }

      .table-hover tbody tr:hover {
        color: #212529;
        background-color: rgba(0, 0, 0, 0.075);
      }

      th {
        text-align: inherit;
      }

      .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .table-responsive > .table-bordered {
        border: 0;
      }
    </style>

</head>

<body>

  <div>
		<caption>REPORTE AFILIADOS PARTIDO REPUBLICANO </caption>
		<caption>Hora y fecha : {{ date('d-m-Y') }}</caption><br><br>

	    <table class="table table-bordered table-striped">
		  	<thead>
			    <tr>
			    	<th scope="col" class="txt-center">Es afiliado</th>
			    	<th scope="col" class="txt-center">Nombre Completo</th>
			    	<th scope="col" class="txt-center">DPI</th>
			    	<th scope="col" class="txt-center">Puesto</th>
			    	<th scope="col" class="txt-center">Departamento</th>
			    	<th scope="col" class="txt-center">Municipio</th>
			    	<th scope="col" class="txt-center">Teléfono</th>
			    	<th scope="col" class="txt-center">Teléfono Alternativo</th>
			    	<th scope="col" class="txt-center">E-mail</th>
			    	<th scope="col" class="txt-center">Dirección</th>
			    	<th scope="col" class="txt-center">Usuario Responsable</th>
			    </tr>
		  	</thead>

		  	<tbody>
			  	@foreach($reporte as $item)
			        <tr>
			        	@if($item->esafiliado === 1)
			            	<td style="text-align: center;"> SI </td>
			        	@else
			            	<td style="text-align: center;"> NO </td>
			        	@endif
			            <td>{{$item->nombre1}} {{$item->nombre2}} {{$item->nombre3}} {{$item->apellido1}} {{$item->nombre2}}</td>
			            <td>{{$item->dpi}}</td>
			            <td>{{$item->puesto}}</td>
			            <td>{{$item->departamento}}</td>
			            <td>{{$item->municipio}}</td>
			            @if($item->telefono1 === null)
			            	<td> No tiene</td>
			        	@else
			            	<td>{{$item->telefono1}}</td>
			        	@endif
			        	@if($item->telefono2 === null)
			            	<td> No tiene</td>
			        	@else
			            	<td>{{$item->telefono2}}</td>
			        	@endif

			        	@if($item->email === null)
			            	<td> No tiene</td>
			        	@else
			            	<td>{{$item->email}}</td>
			        	@endif

			        	<td>{{$item->direccion}}</td>
			        	<td>{{$item->usuario}}</td>

			        </tr>
			    @endforeach
		  	</tbody>
		</table>
	</div>

  	<script type="text/php">
      if ( isset($pdf) ) {
        $pdf->page_script('
        $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
        $pdf->text(270, 17, "Libro Mayor", $font, 12);
        $pdf->text(440, 17, "Folio: $PAGE_NUM", $font, 12);
        ');

      }
    </script>

</body>
</html>