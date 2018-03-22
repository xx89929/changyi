<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends BaseController
{
    public function index(){
        $this->pageTitle = 'case';
        return view('home.case',['pageTitle' => $this->pageTitle]);
    }
}
