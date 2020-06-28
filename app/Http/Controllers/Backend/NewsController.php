<?php

namespace App\Http\Controllers\Backend;

use App\News;
use App\Categories;
use App\NewsImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;


class NewsController extends Controller
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
    public function show($uuid)
    {
        $firstResult = DB::table('news')
        ->join('categories', 'categories.uuid', '=', 'news.category_id')
        ->select('categories.nameCategory', 'news.*')
        ->get();
        $result = $firstResult->firstWhere('uuid', $uuid);

        $newsImage = DB::table('news_image')
        ->where('news_id', $uuid)
        ->get();

        if(!$result && !$newsImage) {
            return redirect()->to('/backend')->withErrors(['newsUuidShowNotFoundMessage'=>'Não foi encontrado a notícia com o ID informado']);
        }

        return view('backend.news.show', ['result' => $result, 'newsImage' => $newsImage]);
    }

    public function create()
    {
        $categoryList = Categories::all();

        if(!$categoryList) {
            return redirect()->to('/backend')->withErrors(['newsCategoryListNotFoundMessage'=>'Não foi encontrado a notícia com o ID informado']);
        }

        return view('backend.news.create', ['categories' => $categoryList]);
    }

    public function store(Request $request)
    {

        $messages = array(
            'title.required' => 'É obrigatório um título para a notícia',
            'body.required' => 'É obrigatório um corpo para a notícia',
            'author.required' => 'É obrigatório informar um autor para a notícia',
            'source.required' => 'É obrigatório informar uma fonte para a notícia',


        );

        $regras = array(
            'title' => 'required|string',
            'body' => 'required|string',
            'author' => 'required|string',
            'source' => 'required|string',

        );


        $validador = Validator::make($request->all(), $regras, $messages);

        if ($validador->fails()) {
            return redirect('backend/news/create')
            ->withErrors(['newsStoreValidadorMessage'=>'Os dados informados não satisfazem os requisitos de validação para o cadastro da notícia'])
            ->withInput($request->all);
        }

        if (!empty($request['nameCategory'])) {

            if ($request->hasFile('images')) {
                $news = News::create($request->except('image', 'category_id'));

                $category = Categories::create($request->all());

                for ($i=0; $i < count($request->allFiles()['images']); $i++) {
                    $file = $request->allFiles()['images'][$i];

                    if(!$file) {
                        return redirect()->to('/backend')->withErrors(['newsImageIncorrectMessage'=>'Imagem incorreta, erro: '. $e]);
                    }

                    $newsImage = new NewsImage();
                    $newsImage->news_id = $news->uuid;
                    $newsImage->path = $file->store('images/news/'.$news->uuid, 's3');
                    $newsImage->save();
                    unset($newsImage);
                }

                $obj_News = News::findOrFail($news->uuid);
                $obj_News->category_id = $category->uuid;
                try {
                    $obj_News->save();
                } catch (\Exception $e){
                    return redirect()->to('/backend')->withErrors(['newsStoreFailedMessage'=>'Não foi possível alterar esta notícia, erro: '. $e]);
                }
             } else {
                $news = News::create($request->except('image', 'category_id'));
                $category = Categories::create($request->all());

                $obj_News = News::findOrFail($news->uuid);
                $obj_News->category_id = $category->uuid;
                try {
                    $obj_News->save();
                } catch (\Exception $e){
                    return redirect()->to('/backend')->withErrors(['newsStoreFailedMessage'=>'Não foi possível alterar esta notícia, erro: '. $e]);
                }
             }

        } else {
            if ($request->hasFile('images')) {
                $news = News::create($request->except('image'));

                for ($i=0; $i < count($request->allFiles()['images']); $i++) {
                    $file = $request->allFiles()['images'][$i];

                    if(!$file) {
                        return redirect()->to('/backend')->withErrors(['newsImageIncorrectMessage'=>'Imagem incorreta, erro: '. $e]);
                    }

                    $newsImage = new NewsImage();
                    $newsImage->news_id = $news->uuid;
                    $newsImage->path = $file->store('images/news/'.$news->uuid, 's3');
                    $newsImage->save();
                    unset($newsImage);
                }

                $obj_News = News::findOrFail($news->uuid);
                $obj_News->category_id = $request['category_id'];
                try {
                    $obj_News->save();
                } catch (\Exception $e){
                    return redirect()->to('/backend')->withErrors(['newsStoreFailedMessage'=>'Não foi possível alterar esta notícia, erro: '. $e]);
                }
             } else {
                $news = News::create($request->except('image', 'category_id'));

                $obj_News = News::findOrFail($news->uuid);
                $obj_News->category_id = $request['category_id'];
                try {
                    $obj_News->save();
                } catch (\Exception $e){
                    return redirect()->to('/backend')->withErrors(['newsStoreFailedMessage'=>'Não foi possível alterar esta notícia, erro: '. $e]);
                }
            }

        }
        return redirect('/backend')->with('success', 'Notícia adicionada com sucesso!!');
    }
    public function edit($uuid)
    {
        $news = DB::table('news')
        ->join('categories', 'categories.uuid', '=', 'news.category_id')
        ->select('categories.nameCategory', 'news.*')
        ->get();
        $newsOnce = $news->firstWhere('uuid', $uuid);
        $obj_Categories = Categories::all();

        if (!$newsOnce) {
            return redirect()->to('/backend')->withErrors(['newsUuidEditNotFoundMessage'=>'Não foi encontrado a notícia com o ID informado']);
        }


        return view('backend.news.edit', ['news' => $newsOnce, 'categories' => $obj_Categories]);
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
            ->withErrors(['newsUpdateValidadorMessage'=>'Os dados inseridos não sarisfazem os requisitos de validação para atualização de notícia'])
            ->withInput($request->all);
        }


        if (!empty($request['nameCategory'])) {

            if ($request->hasFile('images')) {
                $category = Categories::create($request->all());

                for ($i=0; $i < count($request->allFiles()['images']); $i++) {
                    $file = $request->allFiles()['images'][$i];

                    if(!$file) {
                        return redirect()->to('/backend')->withErrors(['newsImageIncorrectMessage'=>'Imagem incorreta, erro: '. $e]);
                    }

                    $newsImage = new NewsImage();
                    $newsImage->news_id = $uuid;
                    $newsImage->path = $file->store('images/news/'.$uuid);
                    $newsImage->save();
                    unset($newsImage);
                }

                $obj_News = News::findOrFail($uuid);
                $obj_News->title = $request['title'];
                $obj_News->body = $request['body'];
                $obj_News->author = $request['author'];
                $obj_News->source = $request['source'];
                $obj_News->category_id = $category->uuid;
                try {
                    $obj_News->save();
                } catch (\Exception $e){
                    return redirect()->to('/backend')->withErrors(['newsStoreFailedMessage'=>'Não foi possível cadastrar esta notícia, erro: '. $e]);
                }

             } else {
                $category = Categories::create($request->all());

                $obj_News = News::findOrFail($uuid);
                $obj_News->title = $request['title'];
                $obj_News->body = $request['body'];
                $obj_News->author = $request['author'];
                $obj_News->source = $request['source'];
                $obj_News->category_id = $category->uuid;
                try {
                    $obj_News->save();
                } catch (\Exception $e){
                    return redirect()->to('/backend')->withErrors(['newsStoreFailedMessage'=>'Não foi possível cadastrar esta notícia, erro: '. $e]);
                }
             }

        } else {
            if ($request->hasFile('images')) {

                for ($i=0; $i < count($request->allFiles()['images']); $i++) {
                    $file = $request->allFiles()['images'][$i];

                    if(!$file) {
                        return redirect()->to('/backend')->withErrors(['newsImageIncorrectMessage'=>'Imagem incorreta, erro: '. $e]);
                    }

                    $newsImage = new NewsImage();
                    $newsImage->news_id = $uuid;
                    $newsImage->path = $file->store('images/news/'.$uuid);
                    $newsImage->save();
                    unset($newsImage);
                }

                $obj_News = News::findOrFail($uuid);
                $obj_News->title = $request['title'];
                $obj_News->body = $request['body'];
                $obj_News->author = $request['author'];
                $obj_News->source = $request['source'];
                $obj_News->category_id = $request['category_id'];
                try {
                    $obj_News->save();
                } catch (\Exception $e){
                    return redirect()->to('/backend')->withErrors(['newsStoreFailedMessage'=>'Não foi possível cadastrar esta notícia, erro: '. $e]);
                }
             } else {
                $obj_News = News::findOrFail($uuid);
                $obj_News->title = $request['title'];
                $obj_News->body = $request['body'];
                $obj_News->author = $request['author'];
                $obj_News->source = $request['source'];
                $obj_News->category_id = $request['category_id'];
                try {
                    $obj_News->save();
                } catch (\Exception $e){
                    return redirect()->to('/backend')->withErrors(['newsStoreFailedMessage'=>'Não foi possível cadastrar esta notícia, erro: '. $e]);
                }
             }
        }

        return redirect('/backend')->withSuccess('Notícia atualizado com sucesso!!');
    }

    public function delete($uuid)
    {
        $obj_News = News::find($uuid);

        if(!$obj_News) {
            return redirect()->to('/backend')->withErrors(['newsDeleteUuidNotFoundMessage'=>'Não foi encontrado a notícia com o ID informado']);
        }

        return view('backend.news.delete', ['news' => $obj_News]);
    }

    public function destroy($uuid)
    {
        $obj_News = News::findOrFail($uuid);

        if(!$obj_News) {
            return redirect()->to('/backend')->withErrors(['newsDeleteUuidNotFoundMessage'=>'Não foi encontrado a notícia com o ID informado']);
        }

        try {
            $obj_News->delete($uuid);
            Storage::disk('s3')->deleteDirectory('images/news/'.$uuid);
        } catch (\Exception $e){
            return redirect()->to('/backend')->withErrors(['newsDestroyFailedMessage'=>'Não foi possível deletar esta notícia, erro: '. $e]);
        }

        return Redirect('/backend')->withSuccess('Notícia excluída com Sucesso!');
    }
}
