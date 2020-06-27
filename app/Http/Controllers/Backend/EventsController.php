<?php

namespace App\Http\Controllers\Backend;

use App\Events;
use App\Http\Controllers\Controller;
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
            ->withErrors(['eventsStoreValidadorMessage'=>'Os dados informados não satisfazem os requisitos de validação para o cadastro do evento'])
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        try {
            $obj_Events = Events::create($request->all());
        } catch (\Exception $e){
            return redirect()->to('/backend')->withErrors(['eventsStoreFailedMessage'=>'Não foi possível cadastrar este evento, erro: '. $e]);
        }
        return redirect('/backend')->with('success', 'Evento criado com sucesso!!');
    }

    public function edit($uuid)
    {
        $obj_Events = Events::find($uuid);

        if (!$obj_Events) {
            return redirect()->to('/backend')->withErrors(['eventsUuidEditNotFoundMessage'=>'Não foi encontrado o evento com o ID informado']);
        }

        return view('backend.events.edit', ['events' => $obj_Events]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $atividade
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
            ->withErrors(['eventsStoreValidadorMessage'=>'Os dados informados não satisfazem os requisitos de validação para a atualização do evento'])
            ->withInput($request->all);
        }

        $obj_Events = Events::findOrFail($uuid);
        $obj_Events->title = $request['title'];
        $obj_Events->description = $request['description'];
        $obj_Events->scheduledto = $request['scheduledto'];
        try {
            $obj_Events->save();
        } catch (\Exception $e){
            return redirect()->to('/backend')->withErrors(['eventsStoreFailedMessage'=>'Não foi possível alterar este evento, erro: '. $e]);
        }

        return redirect('/backend')->withSuccess('Evento atualizado com sucesso!!');
    }

    public function delete($uuid)
    {
        $obj_Events = Events::find($uuid);

        if(!$obj_Events) {
            return redirect()->to('/backend')->withErrors(['eventsDeleteUuidNotFoundMessage'=>'Não foi encontrado o evento com o ID informado']);
        }

        return view('backend.events.delete', ['events' => $obj_Events]);
    }

    public function destroy($uuid)
    {
        $obj_Events = Events::findOrFail($uuid);

        if(!$obj_Events) {
            return redirect()->to('/backend')->withErrors(['eventsDeleteUuidNotFoundMessage'=>'Não foi encontrado o evento com o ID informado']);
        }

        try {
            $obj_Events->delete($uuid);
        } catch (\Exception $e){
            return redirect()->to('/backend')->withErrors(['eventsDestroyFailedMessage'=>'Não foi possível deletar este evento, erro: '. $e]);
        }

        return Redirect('/backend')->withSuccess('Evento excluída com Sucesso!');
    }
}
