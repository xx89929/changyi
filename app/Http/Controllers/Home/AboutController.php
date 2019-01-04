<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\AboutUsModel;
use App\Models\CaseModel;
use App\Models\WebSetModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends BaseController
{
    public function index(){
        $this->pageTitle = 'about';
        $aboutUs = WebSetModel::first();
        $newCase = CaseModel::take(6)->orderBy('id','desc')->get();
        $seoRs = $this->seoRs;
        return view('home.about',['pageTitle' => $this->pageTitle,'aboutUs' => $aboutUs,'newCase' => $newCase,'seoRs' => $seoRs]);
    }
}
