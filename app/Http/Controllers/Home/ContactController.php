<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\WebSetModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends BaseController
{
    public function index(){

        $this->pageTitle = 'contact';
        $contact = ContactModel::first();
        return view('home.contact',['pageTitle' => $this->pageTitle,'contact' => $contact]);
    }
}
