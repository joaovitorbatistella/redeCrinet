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

        $news = DB::table('news')
        ->join('categories', 'categories.uuid', '=', 'news.category_id')
        ->select('categories.nameCategory', 'news.*')
        ->orderBy('updated_at', 'desc')
        ->get();
        $categories = DB::table('categories')
        ->orderBy('updated_at', 'desc')
        ->get();
        $events = DB::table('events')
        ->orderBy('scheduledto', 'desc')
        ->get();
        return view('backend.home',['news' => $news, 'categories' => $categories, 'events' => $events]);


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
}
