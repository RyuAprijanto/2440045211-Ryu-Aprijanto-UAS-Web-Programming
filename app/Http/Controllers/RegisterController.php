<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Password;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'first_name' => 'required|regex:/^[A-Za-z\s-_]+$/',
            'last_name' => 'required|regex:/^[A-Za-z\s-_]+$/',
            'email' => 'required|email|unique:users',
            'psw' => 'required|min:8',
            'psw-repeat' => 'required|same:psw',
            'gender' => 'required',
            'role' => 'required'
        ]);

        // return $validatedData->all();
        //return 'test';

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->psw,
            'address' => $request->address,
            'gender' => $request->gender,
            'roleId' => $request->role
        ]);

        return redirect('/home');
    }
}
