<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpelController extends Controller
{
    // flush the session and return to page
    public function show()
    {
        session()->flush();
        return view('spel');
    }
}
