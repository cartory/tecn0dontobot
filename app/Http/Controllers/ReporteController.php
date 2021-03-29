<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    //
    public function ConsultasPorMes(){
        $queryString=`select COUNT ("Consulta".id) as "Numero de Consultas",
        (to_char("Consulta"."created_at",'Month')) as "Month" 
        from "Consulta" 
        where deleted_at is null 
        group by (to_char("Consulta"."created_at",'Month')) `;
        // $results = DB::statement($queryString);
        $cons='"Consulta"';
        $results = DB::select(
            DB::raw(
                "SELECT COUNT(id) as nro,
                to_char(created_at, 'Month') as mes
                FROM ".$cons.
                "WHERE deleted_at is null
                GROUP BY mes"
        ));
        // \Log::info($results);
        return view('reportes.ConsultasPorMes',  compact('results'));
    }
    public function generosDePaciente(){
        $queryString=`select COUNT ("Consulta".id) as "Numero de Consultas",
        (to_char("Consulta"."created_at",'Month')) as "Month" 
        from "Consulta" 
        where deleted_at is null 
        group by (to_char("Consulta"."created_at",'Month')) `;
        // $results = DB::statement($queryString);
        $cons='"Consulta"';
        $results = DB::select(
            DB::raw(
                "Select count(".'"Paciente"'.".id),".'"Paciente"'.".genero
                from ".'"Paciente"'."
                group by (".'"Paciente"'.".genero)"
        ));
      
        return view('reportes.generosDePaciente',  compact('results'));
    }
    public function consultasPorTratamiento(){
        $queryString='Select count("Consulta".id),"Tratamiento".nombre
        from "Consulta","Consulta_Tratamiento","Tratamiento"
        where "Consulta".id="Consulta_Tratamiento"."Consultaid" and 
        "Consulta_Tratamiento"."Tratamientoid"="Tratamiento".id and 
        "Consulta".deleted_at is null
        group by ("Tratamiento".id)';
        // $results = DB::statement($queryString);
        $cons='"Consulta"';
        $results = DB::select(
            DB::raw(
                // "Select count(".'"Consulta"'.".id),".'"Tratamiento"'.".nombre
                // from ".'"Consulta"'.",".'"Consulta_Tratamiento"'.",".'"Tratamiento"'.
                // "where ".'"Consulta"'.".id=".'"Consulta_Tratamiento"'.".".'"Consultaid"' ."and"
                // .'"Consulta_Tratamiento"'.','.'"Tratamientoid"'."=".'"Tratamiento"'.".id and ".
                // '"Consulta"'.".deleted_at is null
                // group by (".'"Tratamiento"'.".id)"
                $queryString
            ));
      
        return view('reportes.consultasPorTratamiento',  compact('results'));
    }
    public function consultasPorPaciente(){
        $queryString='select COUNT ("Consulta".id) as "NroDeConsultas",
        "Paciente".id as "pacienteId","Paciente".nombre
       from "Consulta","Paciente","Cita"
       where "Consulta".deleted_at is null    
       and  "Paciente"  .deleted_at is null
       and "Paciente".id="Cita"."Pacienteid" 
       and "Cita".id="Consulta"."Citaid"
       group by "Paciente".id,"Paciente".nombre';
        // $results = DB::statement($queryString);
        $cons='"Consulta"';
        $results = DB::select(
            DB::raw(
                $queryString
            ));
 
        return view('reportes.consultasPorPaciente',  compact('results'));
    }
    public function consultasPorMesJSON(){
        $queryString=`select COUNT ("Consulta".id) as "Numero de Consultas",
        (to_char("Consulta"."created_at",'Month')) as "Month" 
        from "Consulta" 
        where deleted_at is null 
        group by (to_char("Consulta"."created_at",'Month')) `;
        // $results = DB::statement($queryString);
        $cons='"Consulta"';
        $results = DB::select(
            DB::raw(
                "SELECT COUNT(id) as nro,
                to_char(created_at, 'Month') as mes
                FROM ".$cons.
                "WHERE deleted_at is null
                GROUP BY mes"
        ));
        \Log::info($results);
        return response( $results);
    }
}
