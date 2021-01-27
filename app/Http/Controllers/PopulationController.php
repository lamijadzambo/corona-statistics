<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PopulationController extends Controller
{
    public function index(){
        $population = Population::all();
        return view('index', compact('population'));

    }


    public function show(){
        return view('upload');
    }


    public function store(Request $request){
        //Population::getPopulationData($request);

        $upload = $request->file('upload-file');
        $filePath = $upload->getRealPath();
        $file = fopen($filePath, 'r');
        $header = fgetcsv($file);
        $escapedHeader = [];

        foreach($header as $key => $value){
            $lheader = Str::lower($value);
            $escaped_item = preg_replace('/[^a-z 0-9]/', '', $lheader);
            array_push($escapedHeader, $escaped_item);
        }

        while ($columns = fgetcsv($file)){
            $data = array_combine($escapedHeader, $columns);

            $population = new Population();
            $population->region = $data['region'];
            $population->population_january = $data['populationjanuary'];
            $population->live_births = $data['livebirths'];
            $population->deaths = $data['deaths'];
            $population->birth_rate = $data['birthrate'];
            $population->immigration = $data['immigration'];
            $population->emigration = $data['emigration'];
            $population->migration_balance = $data['migrationbalance'];
            $population->population_december = $data['populationdecember'];
            $population->absolut = $data['absolut'];
            $population->percent = $data['percent'];

             $population->save();
           // $populationData[] = $population;
        }

        //dd($populationData);


        return view('index');
    }
}
