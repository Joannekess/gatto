<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = Auth::user();
        return view('page.profile')->with('data', $data);
    }

    public function update(string $id): View
    // public function update()
    {
        $user = User::findOrFail($id);
        return view('page.updateProfile', compact('user'));
    }

    public function updateProfile(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        DB::table('users')->where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/profile')->with('success', 'Profile updated successfully');
    }
}
