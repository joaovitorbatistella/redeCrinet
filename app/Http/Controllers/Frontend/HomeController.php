<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Events;
use App\Categories;
use App\news_image;
use App\Live;
use App\News;
use App\Http\Controllers\Controller;
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
        $eventsList = Events::all();
        $live = Live::all()->first();

        return view('frontend.home', ['events' => $eventsList, 'live' => $live]);
    }

    public function ajax(Request $request)
    {
        $category = DB::table('categories')
        ->where('type', $request->title)->get()->first();

        $news = DB::table('news')
        ->where('category_id', $category->uuid)
        ->orderBy('updated_at', 'desc')
        ->get();

        foreach($news as $n){
            $n->updated_at = \Carbon\Carbon::parse($n->updated_at)->format('d/m/Y H:i');
        }

        for($i=0; $i < count($news); $i++) {
            $newsImage = DB::table('news_image')
            ->where('news_id', $news[$i]->uuid)
            ->get();

            $news[$i]->images= $newsImage;
        }

        echo json_encode($news);
    }

    public function ajaxAll(Request $request)
    {
        $news = DB::table('news')
        ->orderBy('updated_at', 'desc')
        ->take(5)
        ->get();

        foreach($news as $n){
            $n->updated_at = \Carbon\Carbon::parse($n->updated_at)->format('d/m/Y H:i');
        }

        echo json_encode($news);
    }
}
