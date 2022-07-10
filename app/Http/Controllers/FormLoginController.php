<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormLoginController extends Controller
{
    public function postlogin(Request $request)
    {
        dd($request->all());
    }
}
