<?php

namespace App\Http\Controllers\Home;

use App\Models\NewsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $news = NewsModel::first();

        return view('home.news',['news' => $news]);
    }
}
