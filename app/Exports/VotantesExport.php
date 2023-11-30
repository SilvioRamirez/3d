<?php

namespace App\Exports;

use App\Models\Votante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class VotantesExport implements FromQuery
{
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    /* public function collection()
    {
        return Votante::all();
    } */

    public function query(){
        return Votante::query()->where('voto_esequibo', [1]);
    }

}
