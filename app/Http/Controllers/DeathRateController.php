<?php

namespace App\Http\Controllers;

use App\Services\DeathRate;
use Illuminate\Http\Request;

class DeathRateController extends Controller
{
    public function store(Request $request){
        $messages = [
            'required' => 'Add your .csv file',
            'mimes' => 'Only .csv files allowed'
        ];

        $request->validate(
            ['death-rate-file' => 'required|mimes:csv,txt'], $messages
        );

        $deathRateFile = $request->file('death-rate-file');
        $deathRate = DeathRate::getDeathRateData($deathRateFile);

        if($deathRate){
            return redirect()->route('index');
        }else{
            $request->session()->flash('death-rate-file', 'Your document is not formatted properly.');
            return redirect()->back();
        }
    }
}
