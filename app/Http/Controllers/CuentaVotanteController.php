<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Votante;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuentaVotanteController extends Controller
{
    public function cuenta_municipio(){
        
        $municipios = Municipio::get(['id', 'municipio', 'votantes', 'epe', 'epm', 'epp', 'joven_comunidad', 'joven_ubch']);

        foreach ($municipios as $item){

            $votantesMunicipio =  Votante::whereIn('mun',[$item->id])->whereIn('voto_esequibo',[1])->get();

            $votantesJovenes = $votantesMunicipio->where('voto_esequibo', '=', 1)->count();

            $votantesEstructura = $votantesMunicipio->where('voto_esequibo', '=', 1)->where('estructura', '<>', '')->count();
            
            $votantesEpe = $votantesMunicipio->where('voto_esequibo', '=', 1)->where('estructura', '=', 'EPE')->count();
            $votantesEpm = $votantesMunicipio->where('voto_esequibo', '=', 1)->where('estructura', '=', 'EPM')->count();
            $votantesEpp = $votantesMunicipio->where('voto_esequibo', '=', 1)->where('estructura', '=', 'EPP')->count();
            $votantesComunidad = $votantesMunicipio->where('voto_esequibo', '=', 1)->where('estructura', '=', 'JOVEN COMUNIDAD')->count();
            $votantesUbch = $votantesMunicipio->where('voto_esequibo', '=', 1)->where('estructura', '=', 'JOVEN UBCH')->count();

            $item['votantes_registrados']   = $votante_count = $votantesJovenes ? $votantesJovenes : '0';
            
                $porcent = ($votante_count / $item->votantes) * 100;
                $porcentFix = substr(strip_tags($porcent),0,4);

            $item['porcentaje_rep']         = $porcentFix;
            $item['votantes_estructura']    = $votante_count_estructura = $votantesEstructura ? $votantesEstructura : '0';
                $date = Carbon::now();
                $date = $date->format('d-m-Y h:m:s A');
            $item['date'] = $date;
            $item['votantes_epe'] = $votantesEpe;
            $item['votantes_epm'] = $votantesEpm;
            $item['votantes_epp'] = $votantesEpp;
            $item['votantes_comunidad'] = $votantesComunidad;
            $item['votantes_ubch'] = $votantesUbch;

        }

        return view('reportes.municipio', compact('municipios'));

    }

    public function cuenta_general(){

        $votantes = Votante::get(['id', 'voto_esequibo', 'estructura']);

        $votantesTotal = $votantes->count();
        
        $votantesGeneral =  Votante::whereIn('voto_esequibo',[1])->get();

        $votantesJovenes = $votantesGeneral->where('voto_esequibo', '=', 1)->count();

        $porcent = ($votantesJovenes / $votantesTotal) * 100;
        $porcentajeRep = substr(strip_tags($porcent),0,4);

        $votantesEstructura = $votantesGeneral->where('voto_esequibo', '=', 1)->where('estructura', '<>', '')->count();
        $votantesEpe = $votantesGeneral->where('voto_esequibo', '=', 1)->where('estructura', '=', 'EPE')->count();
        $votantesEpm = $votantesGeneral->where('voto_esequibo', '=', 1)->where('estructura', '=', 'EPM')->count();
        $votantesEpp = $votantesGeneral->where('voto_esequibo', '=', 1)->where('estructura', '=', 'EPP')->count();
        $votantesComunidad = $votantesGeneral->where('voto_esequibo', '=', 1)->where('estructura', '=', 'JOVEN COMUNIDAD')->count();
        $votantesUbch = $votantesGeneral->where('voto_esequibo', '=', 1)->where('estructura', '=', 'JOVEN UBCH')->count();

        $epeTotal = 0;
        $epmTotal = 0;
        $eppTotal = 0;
        $joven_comunidadTotal = 0;
        $joven_ubchTotal = 0;

        $municipios = Municipio::get(['id', 'epe', 'epm', 'epp', 'joven_comunidad', 'joven_ubch']);

        foreach ($municipios as $item) {
            $epeTotal = $item->epe + $epeTotal;
            $epmTotal = $item->epm + $epmTotal;
            $eppTotal = $item->epp + $eppTotal;
            $joven_comunidadTotal = $item->joven_comunidad + $joven_comunidadTotal;
            $joven_ubchTotal = $item->joven_ubch + $joven_ubchTotal;
        }

        $date = Carbon::now();
        $date = $date->format('d-m-Y h:m:s A');

        //return $reporteGeneral;

        return view('reportes.general', compact('votantesTotal','votantesGeneral','votantesJovenes','porcentajeRep','votantesEstructura','votantesEpe','votantesEpm','votantesEpp','votantesComunidad','votantesUbch','epeTotal','epmTotal','eppTotal','joven_comunidadTotal','joven_ubchTotal','date'));

    }
}
