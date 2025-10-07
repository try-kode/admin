<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){

        
        return view('admin.user.index');
    }

    public function create(){
        return view('admin.user.create');
    }

    public function update_password(){
        return view('admin.user.change_password');
    }

    public function ajxFetchAllUsers(){
        $response = Http::withoutVerifying()->get('https://api.viheakode.online/api/v1/user/')->json();

        $resp_arr = [
            'message' => $response['message'],
            'data' => $response['data'],
            'redirectURL' => '#',
            'success' => true,
        ];
        return response()->json($resp_arr);
    }

    public function change_password(){
        return view('admin.setting.change_password');
    }

    public function ajxChangePassword(Request $request){

        $validated = $request->validate([
            'currentPassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $userData = Session::get('user');
        // $userData = Session::get('user.userId');
        $userId = $userData['userId'];
        $response = Http::withoutVerifying()
            ->post("https://api.viheakode.online/api/v1/user/".$userId."/change_password", [
                'currentPassword' => $request->currentPassword,
                'newPassword' => $request->password,
            ])
            ->json();

        if($response['status'] == 'CREATED'){
            $resp_arr = [
                'message' => $response['message'],
                'data' => $response['data'],
                'redirectURL' => '/change_password',
                'success' => true,
            ];
            // return response()->json($resp_arr);
        }
        else {
            $resp_arr = [
                'message' => $response['message'],
                'data' => null,
                'redirectURL' => '#',
                'success' => false,
            ];
        }
        
        return response()->json($resp_arr);
    }
}
