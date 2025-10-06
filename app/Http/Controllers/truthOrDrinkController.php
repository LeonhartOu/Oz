<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\truthOrDrinkModel;
use Exception;

class truthOrDrinkController extends Controller{
    public function viewList(){
        return view('games/truthOrDrink/truthOrDrink');
    }
}
