<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deaths extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $tableColumns = [
        'id',
        'total2020',
        'total2019',
        'total2018',
        'total2017',
        'total2016',
        'total2015',
        '0-19-2020',
        '0-19-2019',
        '0-19-2018',
        '0-19-2017',
        '0-19-2016',
        '0-19-2015',
        '20-39-2020',
        '20-39-2019',
        '20-39-2018',
        '20-39-2017',
        '20-39-2016',
        '20-39-2015',
        '40-64-2020',
        '40-64-2019',
        '40-64-2018',
        '40-64-2017',
        '40-64-2016',
        '40-64-2015',
        '65-79-2020',
        '65-79-2019',
        '65-79-2018',
        '65-79-2017',
        '65-79-2016',
        '65-79-2015',
        '80-2020',
        '80-2019',
        '80-2018',
        '80-2017',
        '80-2016',
        '80-2015'
    ];

}
