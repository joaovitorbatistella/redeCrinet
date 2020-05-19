<?php

namespace App\Http\Controllers;

use App\categories;
use App\News;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function show($id)
    {
        $news = News::where("uuid", $uuid)->get()->first();
        return view('atendimento.show', ['atendimento' => $atendimento]);
    }
}
