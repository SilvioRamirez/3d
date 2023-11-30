<?php

namespace App\Imports;

use App\Models\Votante;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VotantesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Votante([
            'nac'               => $row['nac'],
            'cedula'            => $row['cedula'],
            'p_apellido'        => $row['p_apellido'],
            's_apellido'        => $row['s_apellido'],
            'p_nombre'          => $row['p_nombre'],
            's_nombre'          => $row['s_nombre'],
            'sexo'              => $row['sexo'],
            'fec_nac'           => $row['fec_nac'],
            'edad'              => $row['edad'],
            'edo'               => $row['edo'],
            'estado'            => $row['estado'],
            'mun'               => $row['mun'],
            'municipio'         => $row['municipio'],
            'paq'               => $row['paq'],
            'parroquia'         => $row['parroquia'],
            'cod_cv'            => $row['cod_cv'],
            'centro_votacion'   => $row['centro_votacion'],
            'direccion'         => $row['direccion']
        ]);
    }

    public function chunkSize(): int
    {
        return 5000;
    }
}
