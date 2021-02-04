<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index(){
        $population = Population::all();
        $deaths = DB::table('death_rate_sums')->get(); //This is a SUM of columns of deaths table fetched as db view

        $deathRate = [];
        $values = [];
        foreach ($deaths[0] as $key => $value){
            $values += [$value];
            $deathRate += [$key => number_format($value)];
        }

        return view('index', compact('population', 'deathRate'));
    }

    public function show(){
        return view('guidelines');
    }
}
