<?php

namespace App\Http\Controllers;

use App\categories;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class HomeBackendController extends Controller
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
    public function index()
    {
        /* $newsList = News::all();
        return view('backend.home', ['new' => $newsList]); */

        $result = DB::table('news')
        ->join('categories', 'categories.uuid', '=', 'news.category_id')
        ->select('categories.nameCategory', 'news.*')
        ->get();
        return view('backend.home', compact('result'));


    }
    public function show($uuid)
    {
        /* $news = News::where("uuid", $uuid)->get()->first();
        return view('backend.show', ['new' => $news]); */

        $firstResult = DB::table('news')
        ->join('categories', 'categories.uuid', '=', 'news.category_id')
        ->select('categories.nameCategory', 'news.*')
        ->get();
        $result = $firstResult->firstWhere('uuid', $uuid);
        return view('backend.show', compact('result'));


    }

    public function ajax(Request $request)
    {

        $category = categories::where('nameCategory', $request->title)->get()->first();
        $news = News::where('category_id', $category->uuid)->get();

        echo json_encode($news);
    }
}
