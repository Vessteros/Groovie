<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * AuthController constructor.
     */
    public function __construct()
    {
       $this->middleware('admin.auth');
    }

    public function showFormAction()
    {
        return view('adminPanel.authForm');
    }
}
