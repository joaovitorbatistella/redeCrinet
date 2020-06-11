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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show($id)
    {
        $categories = categories::where("uuid", $uuid)->get()->first();
        return view('backend.categories.show', ['categories' => $categories]);
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store()
    {
        $messages = array(
            'title.required' => 'É obrigatório um nome para a categoria',
        );
        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('register/category')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Categories = new news();
        $obj_Categories->title = $request['title'];
        $obj_Categories->type = $request['type'];
        $obj_Categories->save();
        return redirect('/backend')->with('success', 'Categoria criada com sucesso!!');
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
