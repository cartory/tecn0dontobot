<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    //
    public function GenerosPorMes(){
        $queryString=`select COUNT ("Consulta".id) as "Numero de Consultas",
        (to_char("Consulta"."created_at",'Month')) as "Month" 
        from "Consulta" 
        where deleted_at is null 
        group by (to_char("Consulta"."created_at",'Month')) `;
        // $results = DB::statement($queryString);
        $results = DB::table('Consulta')
        ->select( DB::raw(`COUNT ("Consulta".id) as "Numero de Consultas"`,
        `(to_char("Consulta"."created_at",'Month')) as "Month"`))
        ->groupByRaw(`to_char("Consulta"."created_at",'Month')`)
        ->get();
        \Log::info($results);
        return view('reportes.GenerosPorMes');
    }
}
