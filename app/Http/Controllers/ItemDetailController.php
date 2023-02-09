<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemDetailController extends Controller
{
    public function ItemDetailPage($item_id)
    {
        $item_details = Item::where('id', $item_id)->first();

        return view('detail')
        ->with('item_details', $item_details);
    }
}
