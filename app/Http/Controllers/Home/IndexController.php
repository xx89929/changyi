<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends BaseController
{
    public function index(){
        $this->pageTitle = 'index';
        return view('home.index',['pageTitle' => $this->pageTitle]);
    }
}
