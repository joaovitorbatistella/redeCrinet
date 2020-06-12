<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CategoriesController extends Controller
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
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        $messages = array(
            'nameCategory.required' => 'É obrigatório um nome para a categoria',
        );
        //vetor com as especificações de validações
        $regras = array(
            'nameCategory' => 'required|string',
            'type' => 'string',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('/backend/categories/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Categories = categories::create($request->all());
        return redirect('/backend')->with('success', 'Categoria criada com sucesso!!');
    }

    public function edit($uuid)
    {
        $obj_Categories = categories::find($uuid);

        return view('backend.categories.edit', ['categories' => $obj_Categories]);
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
            'nameCategory.required' => 'É obrigatório um nome para a categoria',
        );
        //vetor com as especificações de validações
        $regras = array(
            'nameCategory' => 'required|string',
            'type' => 'string',
        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('backend/categories/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        $obj_Categories = categories::findOrFail($uuid);
        $obj_Categories->nameCategory = $request['nameCategory'];
        $obj_Categories->type = $request['type'];
        $obj_Categories->save();

        return redirect('/backend')->with('success', 'Categori atualizada com sucesso!!');
    }

    public function delete($uuid)
    {
        $obj_Categories = categories::find($uuid);
        return view('backend.categories.delete', ['categories' => $obj_Categories]);
    }

    public function destroy($uuid)
    {
        $obj_Categories = categories::findOrFail($uuid);

        $obj_Categories->delete($uuid);

        return Redirect('/backend')->with('sucess', 'Categoria excluída com Sucesso!');
    }
}
