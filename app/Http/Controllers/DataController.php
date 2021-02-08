<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index(){
        $deaths = DB::table('death_rate_sums')->get(); //This is a SUM of columns of deaths table fetched as db view

        $deathRate = [];
        $values = [];
        foreach ($deaths[0] as $key => $value){
            $values += [$value];
            $deathRate += [$key => number_format($value)];
        }

        return view('index', compact('deathRate'));
    }

    public function getPopulationByYear(Request $request)
    {
        if (request()->ajax()) {
            $year = $request->input('year');

            $population = Population::query()->where('canton', 'LIKE', '%' . $year . '%')->get();
            $population->makeHidden(['id', 'created_at', 'updated_at']);

            return response()->json($population);
        }

        return view('index');
    }
}
