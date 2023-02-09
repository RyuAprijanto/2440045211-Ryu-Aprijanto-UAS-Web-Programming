<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::paginate(10);
        $user = Auth::user();
        return view('home', compact('items'));
    }

}
