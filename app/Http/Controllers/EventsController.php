<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class EventsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
            return redirect('/backend/event/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Events = Events::create($request->all());
        return redirect('/backend')->with('success', 'Evento criado com sucesso!!');
    }

    public function edit($uuid)
    {
        $obj_Events = Events::find($uuid);

        return view('backend.events.edit', ['events' => $obj_Events]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\atendimento  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $uuid)
    {

        // dados
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
            return redirect('backend/events/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        $obj_Events = Events::findOrFail($uuid);
        $obj_Events->title = $request['title'];
        $obj_Events->description = $request['description'];
        $obj_Events->scheduledto = $request['scheduledto'];
        $obj_Events->save();

        return redirect('/backend')->with('success', 'Atendimento atualizada com sucesso!!');
    }

    public function delete($uuid)
    {
        $obj_Events = Events::find($uuid);
        return view('backend.events.delete', ['events' => $obj_Events]);
    }

    public function destroy($uuid)
    {
        $obj_Events = Events::findOrFail($uuid);

        $obj_Events->delete($uuid);

        return Redirect('/backend')->with('sucess', 'Evento excluída com Sucesso!');
    }
}
