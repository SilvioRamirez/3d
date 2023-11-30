<?php

namespace App\Http\Controllers;

use App\DataTables\VotantesDataTable;
use App\Models\Votante;
use App\Http\Requests\StoreVotanteRequest;
use App\Http\Requests\UpdateVotanteRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\VotantesImport;
use App\Exports\VotantesExport;

class VotanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VotantesDataTable $dataTable)
    {
        return $dataTable->render('votantes.index');
    }

    public function export() 
    {

        return Excel::download(new VotantesExport, 'votantes.xlsx');

    }

    /**
    * @return \Illuminate\Support\Collection
    */

    public function import() 
    {
        Excel::import(new VotantesImport,request()->file('file'));

        return back();
    }
}
