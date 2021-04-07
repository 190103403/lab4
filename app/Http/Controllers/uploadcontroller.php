<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    //
    function index(Request $req)
    {
        return $req->file('file')->store('docs');
    }
}
