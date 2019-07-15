<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventoController extends Controller
{
    public function inserirDado(Request $request){
        $evento = $request->input('evento');
        if($evento){
            Evento::create([
                'evento' => $evento
            ]);
        }
        else{
            return response(['code'=> 400 , 'mensagem' => 'Evento não encontrado']);
        }
        return response()->json(Evento::all());
    }
}
