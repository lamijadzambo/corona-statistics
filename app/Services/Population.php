<?php

namespace App\Services;

use Illuminate\Support\Str;

class Population
{

    public static function getPopulationData($populationFile){
        $filePath = $populationFile->getRealPath();
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

            $population = new \App\Models\Population();

            $population->upsert(
                ['canton' => $data['canton'], 'person1' => $data['person1'], 'person2' => $data['person2'],
                    'person3' => $data['person3'], 'person4' => $data['person4'], 'person5' => $data['person5'],
                    'six_or_more_person' => $data['sixormoreperson'], 'implausible_household' => $data['implausiblehouseholds']],
                'canton',
                ['person1', 'person2', 'person3', 'person4', 'person5', 'six_or_more_person', 'implausible_household', 'updated_at']
            );
        }

    }

}
