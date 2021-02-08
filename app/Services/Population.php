<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Population as PopulationModel;
class Population
{
    public static function getPopulationData($populationFile){

        $filePath = $populationFile->getRealPath();
        $file = fopen($filePath, 'r');
        $csvFile = fgetcsv($file);

        $csvFile = array_map('strtolower', $csvFile);
        $csvFile = array_map('trim', $csvFile);

        $csvFileHeaderDiff = array_diff(array_filter($csvFile), PopulationModel::$tableColumns);

        if (!empty($csvFileHeaderDiff)){
            return false;
        }

        while ($fileColumns = fgetcsv($file)){
            $data = array_combine($csvFile, $fileColumns);
            PopulationModel::upsert(
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

        return true;
    }

}
