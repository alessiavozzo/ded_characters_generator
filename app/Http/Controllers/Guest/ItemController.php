<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function home()
    {
        $items = Item::all();
        return view('guests.home', compact('items'));
    }




    
}
