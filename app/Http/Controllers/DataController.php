<?php

namespace App\Http\Controllers;

use App\Models\Deaths;
use App\Models\Population;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{

    public function index(){
        $population = Population::all();
        $deaths = DB::table('death_rate_sums')->get();

        return view('index', compact('population', 'deaths'));
    }

}
