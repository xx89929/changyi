<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\CaseModel;
use App\Models\JobsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends BaseController
{
    public function index(){
        $this->pageTitle = 'jobs';
        $jobs = JobsModel::first();
        return view('home.jobs',['pageTitle' => $this->pageTitle,'jobs' => $jobs]);
    }
}
