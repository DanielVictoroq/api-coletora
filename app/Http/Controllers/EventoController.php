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
            return response(['code'=> 400 , 'mensagem' => 'Erro ao coletar evento']);
        }
        return response(['code'=> 200 , 'mensagem' => 'Evento coletado pela api Coletora']);
    }
}
