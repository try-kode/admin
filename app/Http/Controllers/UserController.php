<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
}
