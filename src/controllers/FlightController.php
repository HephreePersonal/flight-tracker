<?php

namespace App\Controllers;

use App\Models\Flight;
use App\Models\Airline;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

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
        // Placeholder for adding a flight
        $response->getBody()->write('Add flight not implemented');
        return $response;
    }

    public function deleteFlight(Request $request, Response $response, array $args): Response
    {
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