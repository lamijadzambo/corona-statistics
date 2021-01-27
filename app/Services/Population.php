<?php

namespace App\Services;

use Illuminate\Support\Str;

class Population
{
   public static function getPopulationData($request){

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

           //dd($data);
           $population = new \App\Models\Population();
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
           //$populationData[] = $population;
       }

       //dd($population);

   }
}
