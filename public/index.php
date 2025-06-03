<?php
// This is the entry point of the application.

// Autoload dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Initialize Eloquent ORM
require_once __DIR__ . '/../config/eloquent.php';
use Slim\Factory\AppFactory;
use App\Controllers\FlightController;

$app = AppFactory::create();

$controller = new FlightController();

$app->get('/', [$controller, 'index']);
$app->post('/flights', [$controller, 'addFlight']);
$app->delete('/flights/{id}', [$controller, 'deleteFlight']);
$app->get('/airlines', [$controller, 'showAirlines']);

$app->run();
?>