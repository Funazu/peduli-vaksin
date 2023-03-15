<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function index() {
        return view('dashboard.profile.index', [
            'title' => 'Profile',
            'profile' => Auth::user()
        ]);
    }

    public function update(Request $request, User $user) {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user->update($validatedData);
        return redirect('/dashboard/profile');
    }
    
}
