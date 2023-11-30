<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            'MP. RAFAEL RANGEL',
            'MP. BOCONO',
            'MP. CARACHE',
            'MP. ESCUQUE',
            'MP. TRUJILLO',
            'MP. URDANETA',
            'MP. VALERA',
            'MP. CANDELARIA',
            'MP. MIRANDA',
            'MP. MONTE CARMELO',
            'MP. MOTATAN',
            'MP. PAMPAN',
            'MP.S RAFAEL CARVAJAL',
            'MP. SUCRE',
            'MP. ANDRES BELLO',
            'MP. BOLIVAR',
            'MP. J.F.MARQUEZ C.',
            'MP. J.V. CAMPO ELIAS',
            'MP. LA CEIBA',
            'MP. PAMPANITO'
        ];
        
        $votantes = [
            '17429',
            '68312',
            '22242',
            '21935',
            '46716',
            '26002',
            '108187',
            '21548',
            '16081',
            '11929',
            '15726',
            '39036',
            '41157',
            '23594',
            '12893',
            '11788',
            '5221',
            '5972',
            '14952',
            '21162'
        ];

        $epe = [
            '1',
            '2',
            '0',
            '2',
            '2',
            '0',
            '6',
            '0',
            '2',
            '0',
            '1',
            '3',
            '1',
            '0',
            '0',
            '1',
            '0',
            '0',
            '2',
            '2'
        ];

        $epm = [
            '18',
            '18',
            '11',
            '11',
            '15',
            '18',
            '12',
            '15',
            '15',
            '13',
            '11',
            '18',
            '11',
            '12',
            '14',
            '10',
            '13',
            '13',
            '23',
            '14'
        ];

        $epp = [
            '21',
            '63',
            '34',
            '14',
            '51',
            '20',
            '32',
            '37',
            '22',
            '17',
            '16',
            '13',
            '13',
            '13',
            '24',
            '9',
            '19',
            '10',
            '13',
            '18'
        ];

        $joven_comunidad = [
            '26',
            '168',
            '104',
            '51',
            '10',
            '0',
            '6',
            '0',
            '0',
            '0',
            '22',
            '2',
            '50',
            '0',
            '1',
            '0',
            '0',
            '1',
            '0',
            '82'
        ];

        $joven_ubch = [
            '18',
            '219',
            '125',
            '54',
            '100',
            '69',
            '117',
            '99',
            '20',
            '45',
            '26',
            '75',
            '42',
            '24',
            '24',
            '22',
            '12',
            '27',
            '20',
            '29'
        ];

        for ($x = 0; $x < 20; $x ++){
            Municipio::Create(                
                [
                    'municipio'         => $municipios[$x],
                    'votantes'          => $votantes[$x],
                    'epe'               => $epe[$x],
                    'epm'               => $epm[$x],
                    'epp'               => $epp[$x],
                    'joven_comunidad'   => $joven_comunidad[$x],
                    'joven_ubch'        => $joven_ubch[$x]
                ],
            );
        }
    }
}
