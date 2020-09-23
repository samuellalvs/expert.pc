<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraphicsCard;

class GraphicsCardController extends Controller
{
    public function index(){
        $graphics_card_list = GraphicsCard::all();

        return response()->json(compact('graphics_card_list'));
    }

    public function find($id){
        $graphics_card = GraphicsCard::findOrFail($id);

        return response()->json(compact('graphics_card'));
    }
}
