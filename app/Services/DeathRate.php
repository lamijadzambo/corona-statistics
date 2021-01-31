<?php

namespace App\Services;

use App\Models\Deaths;
use Illuminate\Support\Str;

class DeathRate
{
    public static function getDeathRateData($deathRateFile){

        $filePath = $deathRateFile->getRealPath();
        $file = fopen($filePath, 'r');

        $header = fgetcsv($file);
        $escapedHeader = [];

        foreach($header as $key => $value){
            $lheader = Str::lower($value);
            $escaped_item = preg_replace('/[^a-z 0-9]/', '', $lheader);
            array_push($escapedHeader, $escaped_item);
        }

        while ($columns = fgetcsv($file)){

            if($columns[0] == ''){
                continue;
            }
            $formattedCsvData = preg_replace('/\D/', '', $columns);
            $data = array_combine($escapedHeader, $formattedCsvData);

            $deaths = new Deaths();
            $deaths->upsert(
                [
                    'id' => (int)$data['id'], 'total2020' => (int)$data['total2020'], 'total2019' => (int)$data['total2019'],
                    'total2018' => (int)$data['total2018'], 'total2017' => (int)$data['total2017'],
                    'total2016' => (int)$data['total2016'], 'total2015' => (int)$data['total2015'],

                    'AGE0_19_2020' => (int)$data['0192020'], 'AGE0_19_2019' => (int)$data['0192019'],
                    'AGE0_19_2018' => (int)$data['0192018'], 'AGE0_19_2017' => (int)$data['0192017'],
                    'AGE0_19_2016' => (int)$data['0192016'], 'AGE0_19_2015' => (int)$data['0192015'],

                    'AGE20_39_2020' => (int)$data['20392020'], 'AGE20_39_2019' => (int)$data['20392019'],
                    'AGE20_39_2018' => (int)$data['20392018'], 'AGE20_39_2017' => (int)$data['20392017'],
                    'AGE20_39_2016' => (int)$data['20392016'], 'AGE20_39_2015' => (int)$data['20392015'],

                    'AGE40_64_2020' => (int)$data['40642020'], 'AGE40_64_2019' => (int)$data['40642019'],
                    'AGE40_64_2018' => (int)$data['40642018'], 'AGE40_64_2017' => (int)$data['40642017'],
                    'AGE40_64_2016' => (int)$data['40642016'], 'AGE40_64_2015' => (int)$data['40642015'],

                    'AGE65_79_2020' => (int)$data['65792020'], 'AGE65_79_2019' => (int)$data['65792019'],
                    'AGE65_79_2018' => (int)$data['65792018'], 'AGE65_79_2017' => (int)$data['65792017'],
                    'AGE65_79_2016' => (int)$data['65792016'], 'AGE65_79_2015' => (int)$data['65792015'],

                    'AGE80_2020' => (int)$data['802020'], 'AGE80_2019' => (int)$data['802019'],
                    'AGE80_2018' => (int)$data['802020'], 'AGE80_2017' => (int)$data['802017'],
                    'AGE80_2016' => (int)$data['802016'], 'AGE80_2015' => (int)$data['802015'],
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
    }
}
