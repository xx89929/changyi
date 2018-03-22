<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends BaseController
{
    public function index(){
        $this->pageTitle = 'jobs';
        return view('home.jobs',['pageTitle' => $this->pageTitle]);
    }
}
