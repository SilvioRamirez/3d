<?php

namespace App\Http\Controllers;

use App\Models\Votante;
use Illuminate\Http\Request;

class RegistroVotanteController extends Controller
{

    public function votante_esequibo(){
        return view('votantes-registro.create');
    }

    public function verificar(Request $request){

        if($votante = Votante::where('cedula', $request->cedula)->first()){
            return view('votantes-registro.verificado',compact('votante'));
        }

        return redirect()->back()->with('error','Cedula no encontrada.');

    }

    public function registrar_voto(Request $request){

        if($votante = Votante::find($request->get('id'))
                                    ->update([
                                                'voto_esequibo' => true,
                                                'telefono_2' => $request->telefono_2
                                            ]))
        {
            return redirect()->route('votante.esequibo')
                        ->with('success','Voto registrado correctamente');
        }

        return redirect()->back()->with('error','Registro no actualizado.');

    }

}
