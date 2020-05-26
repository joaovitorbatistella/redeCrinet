<?php

namespace App\Http\Controllers;


use App\News;
use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\MessageBag;


class NewsBackendController extends Controller
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
        $categoryList = categories::all();
        return view('backend.create', ['categories' => $categoryList]);
    }

    public function store(Request $request)
    {
        // dados
        $messages = array(
            'title.required' => 'É obrigatório um título para a notícia',
            'body.required' => 'É obrigatório um corpo para a notícia',
            'author.required' => 'É obrigatório informar um autor para a notícia',
            'source.required' => 'É obrigatório informar uma fonte para a notícia',


        );
        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string',
            'body' => 'required|string',
            'author' => 'required|string',
            'source' => 'required|string',

        );

        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('backend/news/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        if (!empty($request['nameCategory'])) {

            if ($request->hasFile('images')) {
                $news = News::create($request->except('image', 'category_id'));

                $category = categories::create($request->all());

                $images = $request->file('images');

                foreach($images as $image) {
                    $destination = '/images/'.'news/'.$news->uuid;
                    $path = $image->store($destination, 'public');
                }

                $obj_News = News::findOrFail($news->uuid);
                $obj_News->category_id = $category->uuid;
                $obj_News->image = '/storage/'.$path;
                $obj_News->save();

             } else {
                $news = News::create($request->except('image', 'category_id'));
                $category = categories::create($request->all());

                $obj_News = News::findOrFail($news->uuid);
                $obj_News->category_id = $category->uuid;
                $obj_News->save();
             }

        } else {
            $news = News::create($request->except('image'));

            if ($request->hasFile('images')) {

                $images = $request->file('images');

                foreach($images as $image) {
                    $destination = '/images/'.'news/'.$news->uuid;
                    $path = $image->store($destination, 'public');
                }

                $obj_News = News::findOrFail($news->uuid);
                $obj_News->image = '/storage/'.$path;
                $obj_News->save();
             }

        }
        return redirect('/backend')->with('success', 'Notícia adicionada com sucesso!!');
    }

    public function delete($uuid)
    {

        $obj_News = News::find($uuid);
        return view('backend.delete', ['news' => $obj_News]);
    }

    public function destroy($uuid)
    {
        $obj_News = News::findOrFail($uuid);

        $obj_News->delete($uuid);

        $image_path = public_path("/storage/images/news/{$uuid}");

        File::deleteDirectory($image_path);

        return Redirect('/backend')->with('sucess', 'Notícia excluída com Sucesso!');
    }
}
