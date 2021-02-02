<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class DataController extends Controller
{
    public function index(){
        $year = 2020;
        $population = Population::all();
        $deaths = DB::table('death_rate_sums')->get(); //This is a SUM of columns of deaths table fetched as db view
        $deathRate = [];

        foreach ($deaths[0] as $key => $value){
            $deathRate += [$key => $value];
        }

        return view('index', compact('population', 'deathRate'));
    }


    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $populationData = Population::latest()->get();
            return Datatables::of($populationData)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

}
