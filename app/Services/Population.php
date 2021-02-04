<?php

namespace App\Services;

use Illuminate\Support\Str;

class Population
{

    public static function getPopulationData($populationFile){

        $filePath = $populationFile->getRealPath();
        $file = fopen($filePath, 'r');
        $header = fgetcsv($file);
        $escapedHeader = [];

        foreach($header as $key => $value){
            $lheader = Str::lower($value);
            $escaped_item = preg_replace('/[^a-z 0-9]/', '', trim($lheader));
            array_push($escapedHeader, $escaped_item);
        }

        while ($columns = fgetcsv($file)){
            $data = array_combine($escapedHeader, $columns);

            $population = new \App\Models\Population();

            $population->upsert(
                [
                    'canton' => trim($data['canton']),
                    'total' => trim($data['total']),
                    'person1' => trim($data['person1']),
                    'person2' => trim($data['person2']),
                    'person3' => trim($data['person3']),
                    'person4' => trim($data['person4']),
                    'person5' => trim($data['person5']),
                    'six_or_more_person' => trim($data['sixormoreperson']),
                    'implausible_household' => trim($data['implausiblehouseholds'])
                ],
                'canton',
                ['total', 'person1', 'person2', 'person3', 'person4', 'person5', 'six_or_more_person', 'implausible_household', 'updated_at']
            );
        }

        $fileForAppArchive = $populationFile;
        $fileName = $fileForAppArchive->getClientOriginalName();
        $fileForAppArchive->move('csvUploads', time() . $fileName);
    }

}
