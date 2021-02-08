<?php

namespace App\Http\Controllers;

use App\Services\Population;
use Illuminate\Http\Request;


class PopulationController extends Controller
{
    public function show(){
        return view('dashboard');
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
        $population = Population::getPopulationData($populationFile);

        if($population){
            return redirect()->route('index');
        }else{
            $request->session()->flash('population-file', 'Your document is not formatted properly.');
            return redirect()->back();
        }


    }

}
