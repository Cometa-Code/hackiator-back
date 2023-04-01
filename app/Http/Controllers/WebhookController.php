<?php

namespace App\Http\Controllers;

use App\Helpers\RES;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WebhookController extends Controller
{
    public function webhook(Request $request)
    {
        $email = $request->resource->customer->data->email;
        $cpf = $request->resource->customer->data->cpf;

        User::create([
            'name' => $email,
            'email' => $email,
            'password' => Hash::make($cpf),
        ]);

        return RES::CREATED();
    }
}
