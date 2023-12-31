<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.myprofile.index', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('dashboard.myprofile.editprofile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // Validasi data yang dikirim
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
            // Atur validasi lainnya sesuai kebutuhan (misal: 'password' => 'required|confirmed|min:6')
        ]);

        // Perbarui informasi profil
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];

        // Perbarui password jika diisi dalam form
        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }

        // Simpan perubahan (jangan dihapus!!)
        $user->save();

        return redirect('/dashboard/myprofile')->with('success', 'Profile has been updated!');
    }
}
