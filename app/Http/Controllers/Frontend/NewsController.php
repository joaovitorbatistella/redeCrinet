<?php

namespace App\Http\Controllers\Frontend;

use App\News;
use App\Categories;
use App\NewsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
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

        $result->updated_at_day = \Carbon\Carbon::parse($result->updated_at)->format('d/m/Y');
        $result->updated_at_hour = \Carbon\Carbon::parse($result->updated_at)->format('H:i');

        return view('frontend.news.show', ['result' => $result, 'newsImage' => $newsImage]);
    }
}
