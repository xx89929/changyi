<?php

namespace App\Http\Controllers;

use App\Models\SeoTabelModel;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $pageTitle;
    protected $seoRs;
    public function __construct()
    {
        $seoRs = SeoTabelModel::orderBy('id','DESC')->take(1)->get();
        $this->seoRs =  $seoRs[0];
    }

}
