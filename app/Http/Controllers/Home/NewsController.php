<?php

namespace App\Http\Controllers\Home;

use App\Models\NewsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsModel::all();

        return view('home.news', ['news' => $news]);
    }


    public function info(Request $request){
        if($request->get('id')){
            $info = NewsModel::find($request->get('id'));
            return view('home.news_info',['news' => $info]);
        }
    }
}
