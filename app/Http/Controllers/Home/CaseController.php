<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\CaseModel;
use App\Models\CaseTypeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends BaseController
{
    public function index(Request $request){
        if($request->get('case_type')){
            $case = CaseModel::where('case_type',$request->get('case_type'))->get();
        }else{
            $case = CaseModel::all();
        }
        $caseType = CaseTypeModel::all();
        $this->pageTitle = 'case';
        $seoRs = $this->seoRs;
        return view('home.case',['pageTitle' => $this->pageTitle,'case' => $case,'caseType' => $caseType,'seoRs' => $seoRs]);
    }


    public function info_view(Request $request){
        if($request->get('id')){
            $id = $request->get('id');
            $res = CaseModel::find($id);
            $seoRs = $this->seoRs;
            return view('home.case-info',['case_info' => $res,'seoRs' => $seoRs]);
        }


    }
}
