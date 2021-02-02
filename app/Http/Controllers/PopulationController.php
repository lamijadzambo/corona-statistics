<?php

namespace App\Http\Controllers;

use App\Services\Population;
use Illuminate\Http\Request;


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

        $populationFile = $request->file('population-file');
        Population::getPopulationData($populationFile);

        return redirect()->route('index');
    }

}
