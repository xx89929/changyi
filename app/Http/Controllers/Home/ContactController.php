<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\WebSetModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends BaseController
{
    public function index(){
        $contact = WebSetModel::first();
        $this->pageTitle = 'contact';
        return view('home.contact',['pageTitle' => $this->pageTitle,'contact' => $contact]);
    }
}
