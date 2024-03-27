<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    //
    function index()
    {
        
        return view('auth.login');
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is required'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            // Authentication passed...
            $request->session()->regenerate();
            return redirect()->intended('/home');
        } else {
            // Authentication failed...
            return redirect('/login')->withErrors('Your email or password is incorrect');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');

    }

    function signup()
    {
        return view('auth.signup');
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email has been used',
            'password.required' => 'Password is required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        // $create = DB::table('users')->insert($infocreate);
        if ($data) {
            return redirect('/login')->with('success');
            
        } else {
            return redirect('/signup')->withErrors('Failed to create user');
        }
    }
}
