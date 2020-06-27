<?php

namespace App\Http\Controllers\Backend;

use App\Categories;
use App\News;
use App\Http\Controllers\Controller;
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
}
