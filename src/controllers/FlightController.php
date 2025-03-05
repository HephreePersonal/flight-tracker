<?php

namespace App\Controllers;

use App\Models\Flight;
use App\Models\Airline;

class FlightController
{
    public function index()
    {
        // Logic to retrieve and display the list of flights
    }

    public function addFlight()
    {
        // Logic to handle the addition of a new flight
    }

    public function deleteFlight($flightId)
    {
        // Logic to remove a flight from the records
    }

    public function showAirlines()
    {
        $airlines = Airline::all();
        require_once __DIR__ . '/../views/airlines/index.php';
    }
}