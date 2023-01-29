<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        return 'working register';
    }
}
