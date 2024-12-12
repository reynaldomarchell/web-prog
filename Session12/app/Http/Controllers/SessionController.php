<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function index(Request $request) {
        session(['role' => 'admin']);

        $request->session()->put('role', 'admin');

        Session::put('role', 'admin');
    }
}
