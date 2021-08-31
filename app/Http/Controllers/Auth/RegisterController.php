<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\Response\ResponseService;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request){

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        if (!$user){
            return ResponseService::sendJsonResponse(
                false,
                403,
                ['message' => __('auth.login_error')]
            );
        }

        return ResponseService::sendJsonResponse(
            true,
            200,
            [],
            [
                'user' => $user,
            ]
        );

    }
}
