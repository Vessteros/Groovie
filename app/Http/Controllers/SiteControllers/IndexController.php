<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return view('index');
    }
}
