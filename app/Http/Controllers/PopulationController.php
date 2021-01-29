<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PopulationController extends Controller
{

    public function show(){
        return view('upload');
    }


    public function store(Request $request){

        $messages = [
            'required' => 'Add your .csv file',
            'mimes' => 'Only .csv files allowed'
        ];

        $request->validate(
            ['population-file' => 'required|mimes:csv,txt'], $messages
        );

        $upload = $request->file('population-file');
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

            $population->upsert(
                ['canton' => $data['canton'], 'person1' => $data['person1'], 'person2' => $data['person2'],
                'person3' => $data['person3'], 'person4' => $data['person4'], 'person5' => $data['person5'],
                'six_or_more_person' => $data['sixormoreperson'], 'implausible_household' => $data['implausiblehouseholds']],
                'canton',
                ['person1', 'person2', 'person3', 'person4', 'person5', 'six_or_more_person', 'implausible_household', 'updated_at']
            );
        }

        return redirect()->route('index');
    }

}
