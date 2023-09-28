<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{

public function login(Request $request)
{
    $user = User::where('email', $request->email)->first();

    if ($user&& $request->password=== $user->password) {
        return response(['msg' => 'done', 'data' => $user], 200);
    } else {
        return response(['msg' => 'User not found'], 404);
    }

}

}
