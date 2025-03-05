<?php

namespace App\Controllers;

use App\Models\Flight;
use App\Models\Airline;

class FlightController
{
    public function index()
    {
        // Retrieve all flights
        $flights = Flight::all();

        // Pass the flights data to the view
        require_once __DIR__ . '/../views/flights/index.php';
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