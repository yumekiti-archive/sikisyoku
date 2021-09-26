<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Food;

class FoodController extends Controller
{
    //
    public function index(){
        $foods = Food::all();

        return $foods;
    }
    
    public function search(Request $req){
        $keyword = $req->input('keyword');

        $foods = Food::where('name', 'like', '%' . $keyword . '%');

        return $foods;
    }
}
