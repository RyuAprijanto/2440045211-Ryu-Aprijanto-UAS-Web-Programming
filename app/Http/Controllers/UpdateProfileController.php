<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateProfileController extends Controller
{
    public function update($user_id)
    {
        $user = User::where('id', $user_id);

        return view('update')
        ->with('user', $user);
    }
}
