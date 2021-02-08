<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $tableColumns = ['canton', 'total', 'person1', 'person2', 'person3', 'person4', 'person5', 'sixormoreperson', 'implausiblehouseholds'];
}
