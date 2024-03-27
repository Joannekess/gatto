<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiseasesController extends Controller
{
    public function diseases()
    {
        return view('page.diseases');
    }
}
