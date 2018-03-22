<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends BaseController
{
    public function index(){
        $this->pageTitle = 'partner';
        return view('home.partner',['pageTitle' => $this->pageTitle]);
    }
}
