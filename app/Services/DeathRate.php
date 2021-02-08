<?php

namespace App\Services;

use App\Models\Deaths;

class DeathRate
{
    public static function getDeathRateData($deathRateFile){

        $filePath = $deathRateFile->getRealPath();
        $file = fopen($filePath, 'r');
        $csvFile = fgetcsv($file);
        $csvFile = array_map('strtolower', $csvFile);
        $csvFile = array_map('trim', $csvFile);
        $csvFileHeaderDiff = array_diff(array_filter($csvFile), Deaths::$tableColumns);

            if (!empty($csvFileHeaderDiff)){
                return false;
            }

            while ($fileColumns = fgetcsv($file)){
                if($fileColumns[0] == ''){
                    continue;
                }

        $fileColumns = preg_replace('/\D/', '', $fileColumns);
        $data = array_combine($csvFile, $fileColumns);

        $deaths = new Deaths();
        $deaths->upsert(
            [
                'id' => (int)$data['id'], 'total2020' => (int)$data['total2020'], 'total2019' => (int)$data['total2019'],
                'total2018' => (int)$data['total2018'], 'total2017' => (int)$data['total2017'],
                'total2016' => (int)$data['total2016'], 'total2015' => (int)$data['total2015'],

                'AGE0_19_2020' => (int)$data['0-19-2020'], 'AGE0_19_2019' => (int)$data['0-19-2019'],
                'AGE0_19_2018' => (int)$data['0-19-2018'], 'AGE0_19_2017' => (int)$data['0-19-2017'],
                'AGE0_19_2016' => (int)$data['0-19-2016'], 'AGE0_19_2015' => (int)$data['0-19-2015'],

                'AGE20_39_2020' => (int)$data['20-39-2020'], 'AGE20_39_2019' => (int)$data['20-39-2019'],
                'AGE20_39_2018' => (int)$data['20-39-2018'], 'AGE20_39_2017' => (int)$data['20-39-2017'],
                'AGE20_39_2016' => (int)$data['20-39-2016'], 'AGE20_39_2015' => (int)$data['20-39-2015'],

                'AGE40_64_2020' => (int)$data['40-64-2020'], 'AGE40_64_2019' => (int)$data['40-64-2019'],
                'AGE40_64_2018' => (int)$data['40-64-2018'], 'AGE40_64_2017' => (int)$data['40-64-2017'],
                'AGE40_64_2016' => (int)$data['40-64-2016'], 'AGE40_64_2015' => (int)$data['40-64-2015'],

                'AGE65_79_2020' => (int)$data['65-79-2020'], 'AGE65_79_2019' => (int)$data['65-79-2019'],
                'AGE65_79_2018' => (int)$data['65-79-2018'], 'AGE65_79_2017' => (int)$data['65-79-2017'],
                'AGE65_79_2016' => (int)$data['65-79-2016'], 'AGE65_79_2015' => (int)$data['65-79-2015'],

                'AGE80_2020' => (int)$data['80-2020'], 'AGE80_2019' => (int)$data['80-2019'],
                'AGE80_2018' => (int)$data['80-2018'], 'AGE80_2017' => (int)$data['80-2017'],
                'AGE80_2016' => (int)$data['80-2016'], 'AGE80_2015' => (int)$data['80-2015'],
            ],
            'id', // unique DB key
            [
                'total2020', 'total2019', 'total2018', 'total2017', 'total2016', 'total2015',
                'AGE0_19_2020', 'AGE0_19_2019', 'AGE0_19_2018', 'AGE0_19_2017', 'AGE0_19_2016', 'AGE0_19_2015',
                'AGE20_39_2020', 'AGE20_39_2019', 'AGE20_39_2018', 'AGE20_39_2017', 'AGE20_39_2016', 'AGE20_39_2015',
                'AGE40_64_2020', 'AGE40_64_2019', 'AGE40_64_2018', 'AGE40_64_2017', 'AGE40_64_2016', 'AGE40_64_2015',
                'AGE65_79_2020', 'AGE65_79_2019', 'AGE65_79_2018', 'AGE65_79_2017', 'AGE65_79_2016', 'AGE65_79_2015',
                'AGE80_2020', 'AGE80_2019', 'AGE80_2018', 'AGE80_2017', 'AGE80_2016', 'AGE80_2015',
                'updated_at'
            ]
        );
    }

    $fileForAppArchive = $deathRateFile;
    $fileName = $fileForAppArchive->getClientOriginalName();
    $fileForAppArchive->move('csvUploads', time() . $fileName);

    return true;
    }
}
