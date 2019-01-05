<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\NewsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends BaseController
{
    public function index()
    {
        $news = NewsModel::all();
        $seoRs = $this->seoRs;
        return view('home.news', ['news' => $news,'seoRs' => $seoRs]);
    }


    public function info(Request $request){
        if($request->get('id')){
            $info = NewsModel::find($request->get('id'));
            $seoRs = $this->seoRs;
            return view('home.news_info',['news' => $info,'seoRs' => $seoRs]);
        }
    }
}
