<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExcelController extends Controller
{
    public function show(){
        return view('upload');
    }

    public function store(Request $request)
    {
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
            if($columns[0] == ""){
                continue;
            }

        foreach ($columns as $key => $value){

            $value1 = str_replace(' ', '', $value);
            //$escaped_value = preg_replace('/(\d)\s+(\d)/', '', $value);
        }

        $data = array_combine($escapedHeader, $columns);


        foreach($data as $key => &$value1){
            $value = ($key == 'total 10')?(float)$value: (integer)$value;

        }

            $total1 = $data['total 1'];
            $total2 = $data['total 2'];
            $total3 = $data['total 3'];
            $total4 = $data['total 4'];
            $total5 = $data['total 5'];
            $total6 = $data['total 6'];
            $total7 = $data['total 7'];
            $total8 = $data['total 8'];
            $total9 = $data['total 9'];
            $total10 = $data['total 10'];
        }
    }
}
