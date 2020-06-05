<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class EventsController extends Controller
{


    public function create()
    {
        return view('backend.events.create');
    }

    public function store(Request $request)
    {
        $messages = array(
            'title.required' => 'É obrigatório um título para o evento',
            'description.required' => 'É obrigatório uma descrição para o evento',
            'scheduledto.required' => 'É obrigatório uma data para o evento',
        );
        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string',
            'description' => 'required|string',
            'scheduledto' => 'required',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('register/event')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Events = Events::create($request->all());
        return redirect('/backend')->with('success', 'Evento criado com sucesso!!');
    }
}
