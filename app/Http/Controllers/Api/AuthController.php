<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // if (!$token = JWTHAuth::attempt($credentials)) {
        //     return response()->json(['error' => 'invalid_credentials'], 401);
        // }

        // return response()->json(compact('token', 'user'));
    }
}
