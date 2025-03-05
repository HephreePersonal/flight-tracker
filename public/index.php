<?php
// This is the entry point of the application.

// Autoload dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Initialize Eloquent ORM
require_once __DIR__ . '/../config/eloquent.php';

// Initialize the application
$app = new \App\Application();

// Define routes
$app->get('/', 'FlightController@index');
$app->post('/flights', 'FlightController@addFlight');
$app->delete('/flights/{id}', 'FlightController@deleteFlight');
$app->get('/airlines', 'FlightController@showAirlines'); // Add this line

// Run the application
$app->run();
?>