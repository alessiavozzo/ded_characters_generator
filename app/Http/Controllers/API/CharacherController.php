<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacherController extends Controller
{
    public function index(){

        $characters = Character::with('type','items')->get();
        return response()->json([
            'success'=>true,
            'characters'=>$characters
        ]);
    }
}
