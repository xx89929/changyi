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
        return view('home.case',['pageTitle' => $this->pageTitle,'case' => $case,'caseType' => $caseType]);
    }


    public function info_view(Request $request){
        return view('home.case-info');
    }
}
