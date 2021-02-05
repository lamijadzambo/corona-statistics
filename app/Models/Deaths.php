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
        '0192020',
        '0192019',
        '0192018',
        '0192017',
        '0192016',
        '0192015',
        '20392020',
        '20392019',
        '20392018',
        '20392017',
        '20392016',
        '20392015',
        '40642020',
        '40642019',
        '40642018',
        '40642017',
        '40642016',
        '40642015',
        '65792020',
        '65792019',
        '65792018',
        '65792017',
        '65792016',
        '65792015',
        '802020',
        '802019',
        '802018',
        '802017',
        '802016',
        '802015'
    ];

}
