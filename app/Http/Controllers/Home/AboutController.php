<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends BaseController
{
    public function index(){
        $this->pageTitle = 'about';
        return view('home.about',['pageTitle' => $this->pageTitle]);
    }
}
