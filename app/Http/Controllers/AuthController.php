<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct(){
        
    }
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        $token = null;
       // $user_type = ['typ' => ($request->input('email') == "admin@mpc.com" ? 'admin' : 'user')];
        try {
            if (!$token = JWTAuth::attempt($credentials /*,$user_type*/)) {
                return response()->json(['error' => 'invalid_credentials'],401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'server_error'], HttpResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
        $user = JWTAuth::toUser($token);
        return response()->json(compact('token', 'user'));
    }

    public function getAuthenticatedUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                Event::listen('tymon.jwt.absent');
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }

}