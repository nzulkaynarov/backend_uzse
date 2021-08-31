<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request) {


        $credentials = request(['email','password']);

        if(!Auth::attempt($credentials)) {
            return ResponseService::sendJsonResponse(
                false,
                403,
                ['message' => __('Login error')]
            );
        }

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');

        return ResponseService::sendJsonResponse(
            true,
            200,
            [],
            [
                'api_token' => $tokenResult->accessToken,
                'user' => $user,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            ]
        );
    }
}
