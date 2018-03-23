<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\CaseModel;
use App\Models\CaseTypeModel;
use App\Models\PartnerModel;
use App\Models\WebSetModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends BaseController
{
    public function index(){
        $caseType = CaseTypeModel::all();
        $case = CaseModel::all();
        $bannerCase = $case->take(20)->all();
        $partner = PartnerModel::take(12)->get();
        $contact = WebSetModel::first();
        $this->pageTitle = 'index';
        return view('home.index',['pageTitle' => $this->pageTitle,'bannerCase' => $bannerCase,'caseType' => $caseType,'case' => $case,'partner' => $partner,'contact' => $contact]);
    }
}
