<?php

namespace App\Controllers;

use App\Models\Flight;
use App\Models\Airline;

class FlightController
{
    public function index(Request $request, Response $response, array $args): Response
    {
        // Retrieve all flights
        $flights = Flight::all();

        // Render the view
        ob_start();
        require __DIR__ . '/../views/flights/index.php';
        $output = ob_get_clean();

        $response->getBody()->write($output);
        return $response;
    }

    public function addFlight(Request $request, Response $response, array $args): Response
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
        // Placeholder for adding a flight
        $response->getBody()->write('Add flight not implemented');
        return $response;
    }

    public function deleteFlight(Request $request, Response $response, array $args): Response
    {
        Capsule::table('flights')->where('id', $flightId)->delete();

        header('Location: /');
        exit;
        // Placeholder for deleting a flight
        $response->getBody()->write('Delete flight not implemented');
        return $response;
    }

    public function showAirlines(Request $request, Response $response, array $args): Response
    {
        $airlines = Airline::all();

        ob_start();
        require __DIR__ . '/../views/airlines/index.php';
        $output = ob_get_clean();

        $response->getBody()->write($output);
        return $response;
    }
}