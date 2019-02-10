<?php

namespace App\Http\Controllers;

use \Illuminate\View\View;
use \Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * AccountsController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('app.accounts.accounts');
    }

    public function auth(Request $request)
    {
        $data = $request->getContent();
        $data = json_decode($data, true);





        return $data['authUrl'];
    }
}