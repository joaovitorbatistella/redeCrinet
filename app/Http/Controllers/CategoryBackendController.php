<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CategoryBackendController extends Controller
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

    public function create()
    {
        return view('backend.create');
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
        $obj_Categories->save();
        return redirect('/backend')->with('success', 'Categoria criada com sucesso!!');
    }
}
