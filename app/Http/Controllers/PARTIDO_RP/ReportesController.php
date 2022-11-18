<?php

namespace App\Http\Controllers\PARTIDO_RP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Alert;
use PDF;
use Carbon\Carbon;
use DB;

class ReportesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function afiliadosReport()
    {
        $sql = '
            SELECT
                a.id,
                a.nombre1, 
                a.nombre2, 
                a.nombre3, 
                a.apellido1,
                a.apellido2,
                a.dpi,
                pue.puesto,
                dep.departamento,
                mun.municipio,
                a.telefono1,
                a.telefono2,
                a.email,
                a.direccion,
                a.estado,
                a.esafiliado,
                usu.usuario 
            FROM afiliados a
            INNER JOIN puestos pue ON (a.id_puesto = pue.id)
            INNER JOIN departamentos dep ON (a.id_departamento = dep.id)
            INNER JOIN municipios mun ON (a.id_municipio = mun.id)
            INNER JOIN usuario usu ON (a.id_responsable = usu.id)
            WHERE a.estado = 1 ';
        $reporte = DB::select($sql);

        $pdf = PDF::loadView('pages.maintenance.reportes.afiliados', compact('reporte'))->setPaper('a4', 'landscape');
        return $pdf->stream('Afiliados.pdf');
    }

   
}
