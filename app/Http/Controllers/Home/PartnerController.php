<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\PartnerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends BaseController
{
    public function index(){
        $partner = PartnerModel::all();
        $this->pageTitle = 'partner';
        return view('home.partner',['pageTitle' => $this->pageTitle,'partner' => $partner]);
    }
}
