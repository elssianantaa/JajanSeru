<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    //

    public function show(){
        $data['food'] = Food::all();
        return view('landingPage', $data);
    }
}
