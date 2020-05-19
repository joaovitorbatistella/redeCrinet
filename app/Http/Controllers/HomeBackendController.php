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
        $newsList = News::all();
        return view('backend.home', ['new' => $newsList]);
    }
    public function show($uuid)
    {
        $news = News::where("uuid", $uuid)->get()->first();
        return view('backend.show', ['new' => $news]);
    }
}
