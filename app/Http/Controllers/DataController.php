<?php

namespace App\Http\Controllers;

use App\Models\Deaths;
use App\Models\Population;

class DataController extends Controller
{

    public function index(){
        $population = Population::all();
        $deaths = Deaths::all();
        return view('index', compact('population', 'deaths'));
    }
}
