<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AccMaintainanceController extends Controller
{
    public function list()
    {
        $userlist = User::all();
        $roles = Role::where('id', $userlist->role_id);
        return view('acc-maintainance', compact('userlist', 'roles'));
    }
}
