<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserIssuerSubscription;
use App\Services\Response\ResponseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
         public function users(){
        $users = User::all();
        if ($users){
            return ResponseService::sendJsonResponse(
                true,
                200,
                [],
                [
                    'user' => $users,
                    'message' => __('Success'),
                ]
            );
        }

        return ResponseService::sendJsonResponse(
            false,
            403,
            ['message' => __('Error')]
        );
    }
    
    
        public function userInfo($id){
        $user = User::find($id);
        if ($user){
            return ResponseService::sendJsonResponse(
                true,
                200,
                [],
                [
                    'user' => $user,
                    'message' => __('Success'),
                ]
            );
        }

        return ResponseService::sendJsonResponse(
            false,
            403,
            ['message' => __('Error')]
        );
    }
    
    public function infoEdit(UserRequest $request,$id){
        $user = User::find($id);
        $data = $request->all();

        if ($user->update($data)){
            return ResponseService::sendJsonResponse(
                true,
                200,
                [],
                [
                    'user' => $user,
                    'message' => __('Saved successfully'),
                ]
            );
        }

        return ResponseService::sendJsonResponse(
            false,
            403,
            ['message' => __('Error')]
        );

    }

    public function passwordUpdate(PasswordRequest $request,$id){
        $user = User::find($id);
        if (Hash::check($request->old_password, $user->password)) {
            $user = User::find($id);
            $data = $request->all();
            $data['password'] = bcrypt($request->password);

            if ($user->update($data)) {
                return ResponseService::sendJsonResponse(
                    true,
                    200,
                    [],
                    [
                        'user' => $user,
                        'message' => __('Password updated'),
                    ]
                );
            }

            return ResponseService::sendJsonResponse(
                false,
                403,
                ['message' => __('Error')]
            );
        }
        return ResponseService::sendJsonResponse(
            false,
            403,
            ['message' => __('Incorrect old password')]
        );

    }

    public function imageUpdate(ImageRequest $request, $id){
        $user = User::find($id);
        $data = $request->all();
        if ($file = User::uploadImage($request, $user->thumbnail)){
            $data['thumbnail'] = $file;
        }
        if ($user->update($data)){
            return ResponseService::sendJsonResponse(
                true,
                200,
                [],
                [
                    'user' => $user,
                    'message' => __('Image uploaded'),
                ]
            );
        }
        return ResponseService::sendJsonResponse(
            false,
            403,
            ['message' => __('Error')]
        );
    }

    public function imageDelete($id){
        $user = User::find($id);
        $data['thumbnail'] = null;
        if ($user->update($data)){
            return ResponseService::sendJsonResponse(
                true,
                200,
                [],
                [
                    'user' => $user,
                    'message' => __('Image uploaded'),
                ]
            );
        }
        return ResponseService::sendJsonResponse(
            false,
            403,
            ['message' => __('Error')]
        );
        Storage::delete($user->thumbnail);

    }

    public function issuerSubscriptions($id){
        $user = User::find($id);
        return response()->json($user->issuerSubscriptions, 200);
    }

    public function brokerSubscriptions($id){
        $user = User::find($id);
        return response()->json($user->brokerSubscriptions, 200);
    }


}
