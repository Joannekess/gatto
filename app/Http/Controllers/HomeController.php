<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $data = User::all();
        // return view('page.home')->with('data', $data);

        $data = Auth::user();
        return view('page.home')->with('data', $data);
    }

}
