<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;

class DiseasesController extends Controller
{
    public function diseases()
    {
        $data = Disease::all();
        return view('page.diseases')->with('data', $data);
    }
}
