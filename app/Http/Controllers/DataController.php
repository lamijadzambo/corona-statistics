<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index(){
        $population = Population::all();
        $deaths = DB::table('death_rate_sums')->get(); //This is a SUM of columns of deaths table fetched as db view
        $deathRate = [];

        foreach ($deaths[0] as $key => $value){
            $deathRate += [$key => $value];
        }

        return view('index', compact('population', 'deathRate'));
    }
}
