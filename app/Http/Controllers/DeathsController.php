<?php

namespace App\Http\Controllers;

use App\Services\DeathRate;
use Illuminate\Http\Request;

class DeathsController extends Controller
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
        DeathRate::getDeathRateData($deathRateFile);

        return redirect()->route('index');
    }
}
