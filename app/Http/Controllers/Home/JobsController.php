<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\CaseModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends BaseController
{
    public function index(){
        $this->pageTitle = 'jobs';
        $trCase = CaseModel::take(3)->get();
        return view('home.jobs',['pageTitle' => $this->pageTitle,'trCase' => $trCase]);
    }
}
