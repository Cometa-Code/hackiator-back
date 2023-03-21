<?php

namespace App\Http\Controllers;

use App\Helpers\RES;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|max:256',
            'email' => 'email|unique:users|max:256',
            'password' => 'string|max:256'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return RES::CREATED();
    }
}
