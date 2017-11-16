<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $token = JWTAuth::attempt($credentials);
        
        if ($token) {
            return response()->json(compact('token'));
        }

        return response()->json(['error' => 'invalid_credentions'], 401);
    }
}
