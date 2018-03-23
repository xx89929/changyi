<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\CaseModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends BaseController
{
    public function index(){
        $case = CaseModel::all();
        $this->pageTitle = 'case';
        return view('home.case',['pageTitle' => $this->pageTitle,'case' => $case]);
    }
}
