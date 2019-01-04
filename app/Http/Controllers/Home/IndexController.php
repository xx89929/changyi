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

        $partner = PartnerModel::all();
        $contact = WebSetModel::first();
        $caseType = CaseTypeModel::all();
        $case = CaseModel::all();
        $this->pageTitle = 'index';
        $seoRs = $this->seoRs;
        return view('home.index',['pageTitle' => $this->pageTitle,'caseType' => $caseType,'case' => $case,'partner' => $partner,'contact' => $contact,'seoRs' => $seoRs]);
    }
}
