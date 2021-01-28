<?php

namespace App\Http\Controllers;

use App\Models\Deaths;
use App\Models\Population;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PopulationController extends Controller
{

    public function show(){
        return view('upload');
    }


    public function store(Request $request){

        $upload = $request->file('upload-population');
        $filePath = $upload->getRealPath();
        $file = fopen($filePath, 'r');
        //$upload->store(public_path('/csvFiles')); // move to the public folder!!!!
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
            $population->canton = $data['canton'];
            $population->person1 = $data['person1'];
            $population->person2 = $data['person2'];
            $population->person3 = $data['person3'];
            $population->person4 = $data['person4'];
            $population->person5 = $data['person5'];
            $population->six_or_more_person = $data['sixormoreperson'];
            $population->implausible_household = $data['implausiblehouseholds'];
            $population->year = $data['year'];
             $population->save();
           // $populationData[] = $population;
        }

        //dd($populationData);

        return redirect()->route('index');
    }
}
