<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user(); // Mendapatkan pengguna yang sedang login
        return view('dashboard.myprofile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user(); // Mendapatkan pengguna yang sedang login

        // Validasi data yang dikirim
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Atur validasi lainnya sesuai kebutuhan (misal: 'password' => 'required|confirmed|min:6')
        ]);

        // Perbarui informasi profil
        $user->update($validatedData);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
}
