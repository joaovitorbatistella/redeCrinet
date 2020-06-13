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
            ->withErrors(['categoriesStoreValidadorMessage'=>'Os dados inseridos não sarisfazem os requisitos de validação para o cadastro de uma categoria'])
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        try {
            $obj_Categories = categories::create($request->all());
        } catch (\Exception $e){
            return redirect()->to('/backend')->withErrors(['categoriesStoreFailedMessage'=>'Não foi possível cadastrar esta categoria, erro: '. $e]);
        }
        return redirect('/backend')->withSuccess('Categoria criada com sucesso!!');
    }

    public function edit($uuid)
    {
        $obj_Categories = categories::find($uuid);

        if (!$obj_Categories) {
            return redirect()->to('/backend')->withErrors(['categoriesUuidEditNotFoundMessage'=>'Não foi encontrado a categoria com o ID informado']);
        }

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
            ->withErrors(['categoriesUpdateValidadorMessage'=>'Os dados inseridos não sarisfazem os requisitos de validação para atualização de categoria'])
            ->withInput($request->all);
        }

        $obj_Categories = categories::findOrFail($uuid);
        $obj_Categories->nameCategory = $request['nameCategory'];
        $obj_Categories->type = $request['type'];
        $obj_Categories->save();

        return redirect('/backend')->withSuccess('Categoria atualizada com sucesso!!');
    }

    public function delete($uuid)
    {
        $obj_Categories = categories::find($uuid);

        if(!$obj_Categories) {
            return redirect()->to('/backend')->withErrors(['categoiresDeleteUuidNotFoundMessage'=>'Não foi encontrado a categoria com o ID informado']);
        }

        return view('backend.categories.delete', ['categories' => $obj_Categories]);
    }

    public function destroy($uuid)
    {
        $obj_Categories = categories::findOrFail($uuid);

        if(!$obj_Categories) {
            return redirect()->to('/backend')->withErrors(['categoriesDeleteUuidNotFoundMessage'=>'Não foi encontrado a categoria com o ID informado']);
        }

        try {
            $obj_Categories->delete($uuid);

        } catch (\Exception $e){
            return redirect()->to('/backend')->withErrors(['categoriesDestroyFailedMessage'=>'Não foi possível deletar esta categoria, erro: '. $e]);
        }

        return Redirect('/backend')->withSuccess('Categoria excluída com Sucesso!');
    }
}
