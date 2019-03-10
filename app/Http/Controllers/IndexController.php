<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * @return RedirectResponse|Redirector|View
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('/accounts');
        } else {
            return view('index');
        }
    }
}
