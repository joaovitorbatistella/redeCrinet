<?php

namespace App\Http\Controllers\Backend;

use App\Live;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class LiveController extends Controller
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

    public function store(Request $request)
    {
        $messages = array(
            'implementationCode.required' => 'É obrigatório um link para a atualização da LIVE',
        );
        //vetor com as especificações de validações
        $regras = array(
            'implementationCode' => 'required|string',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('/backend')
            ->withErrors(['liveStoreValidadorMessage'=>'Os dados informados não satisfazem os requisitos de validação para o registro desta LIVE'])
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        try {
            $explodedSRC = explode('"', $request['implementationCode']);

            $count = sizeof($explodedSRC) -1;

            for ($i = 0; $i <= $count; $i++) {
                if (filter_var($explodedSRC[$i], FILTER_VALIDATE_URL)) {
                    $src = $explodedSRC[$i];
                  }
            }

            dd($src);


            $obj_Live = Live::findOrFail(1);
            $obj_Live->src = $src;
            $obj_Live->save();

        } catch (\Exception $e){
            return redirect()->to('/backend')->withErrors(['liveStoreFailedMessage'=>'Não foi possível registrar esta LIVE, erro: '. $e]);
        }
        return redirect('/backend')->with('success', 'Live resgistrada com sucesso!!');
    }
}
