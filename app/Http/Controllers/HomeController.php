<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.front');
    }

    public function ajax(Request $request)
    {
        $category = DB::table('categories')
        ->where('nameCategory', $request->title)->get()->first();

        $news = DB::table('news')
        ->where('category_id', $category->uuid)
        ->orderBy('updated_at', 'desc')
        ->get();

        foreach($news as $n){
            $n->updated_at = \Carbon\Carbon::parse($n->updated_at)->format('d/m/Y h:m');
        }

        echo json_encode($news);
    }
}
