<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function index(){
        $list_brands = Brand::all();

        return response()->json(compact('list_brands'));
    }
}
