<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
        if ($request->ajax()) {
            $data = Population::select([
                'canton',
                'total',
                'person1',
                'person2',
                'person3',
                'person4',
                'person5',
                'six_or_more_person',
                'implausible_household'
            ]);

            return DataTables::of($data)
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('year'))) {
                            $instance->where(function ($w) use ($request){
                                $year = $request->get('year');
                                $w->orWhere('canton', 'LIKE', '%' . $year . '%');
                            });
                        }
                    })
                    ->make(true);
        }

        return view('index');
    }
}
