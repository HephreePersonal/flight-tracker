<?php

namespace App\Controllers;

use App\Models\Flight;
use App\Models\Airline;
use Illuminate\Database\Capsule\Manager as Capsule;

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
        // Insert a new flight record using POSTed data
        $airline = $_POST['airline'] ?? null;
        $flightNumber = $_POST['flight_number'] ?? null;

        if ($airline && $flightNumber) {
            Capsule::table('flights')->insert([
                'airline' => $airline,
                'flight_number' => $flightNumber,
            ]);
        }

        header('Location: /');
        exit;
    }

    public function deleteFlight($flightId)
    {
        Capsule::table('flights')->where('id', $flightId)->delete();

        header('Location: /');
        exit;
    }

    public function showAirlines()
    {
        $airlines = Airline::all();
        require_once __DIR__ . '/../views/airlines/index.php';
    }
}