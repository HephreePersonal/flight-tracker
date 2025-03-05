<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $table = 'airlines';
    protected $primaryKey = 'AirlineID';
    public $timestamps = true;

    protected $fillable = [
        'AirlineName',
        'code',
        'AirlineFromDate',
        'AirlineToDate',
        'RenamedToAirlineID'
    ];
}
