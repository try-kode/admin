<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function ajxlogin(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // $response = Http::post('https://api.viheakode.online/api/v1/auth/login', [
        //     'username' => $request->username,
        //     'password' => $request->password
        // ])
        // ->json();



        $response = Http::withoutVerifying()
            ->post('https://api.viheakode.online/api/v1/auth/login', [
                'username' => $request->username,
                'password' => $request->password,
            ])
            ->json();
            

        if ($response['data']) {
            Session::put('user', $response['data']);
            Session::put('store', '5');
            // Session::put('store', "1");
            $resp_arr = [
                'message' => $response['message'],
                'data' => $response['data'],
                'redirectURL' => '/dashboard',
                'success' => true,
            ];
            return response()->json($resp_arr);
        }
        $resp_arr = [
            'message' => $response['message'],
            'data' => $response['data'],
            'redirectURL' => '#',
            'success' => false,
        ];
        return response()->json($resp_arr);
    }

    public function logout(Request $request){
        $request->session()->invalidate();           // Invalidate the session
        $request->session()->regenerateToken();  
            // Regenerate CSRF token

        $resp_arr = [
            'message' => "Logged out",
            'data' => null,
            'redirectURL' => '/login',
            'success' => true
        ];
        return response()->json($resp_arr);// or any route you want after logout
    }
}
