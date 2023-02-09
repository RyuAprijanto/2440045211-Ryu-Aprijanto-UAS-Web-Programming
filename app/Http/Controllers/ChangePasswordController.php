<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;

class ChangePasswordController extends Controller
{
    //
    public function index()
    {
        return view('change-password');
    }

    public function changePasswordPost(Request $request)
    {
        $request->validate([
            'oldPassword' => 'required|current_password',
            'password' => 'required|string|min:8',
            'confirmPassword' => 'required|same:password'
        ]);

        // if (!(Hash::check($request->oldPassword, Auth::user()->password))) {

        //     return redirect()->back()->with("error", "Current password doesn't matches. Please try again.");
        // }

        // if (strcmp($request->oldPassword, $request->password) == 0) {

        //     return redirect()->back()->with("error", "New Password matches current password. Please try again.");
        // }

        $user = User::find(Auth::user()->id);
        $user->password = ($request->password);
        $user->save();

        return redirect('/home');
    }
}
