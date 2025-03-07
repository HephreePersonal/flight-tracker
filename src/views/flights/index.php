<?php
// This file is responsible for rendering the view that displays the list of flights.

require_once '../../../config/database.php';
require_once '../../models/Flight.php';

$flights = []; // This will hold the list of flights, fetched from the database or controller

// Here you would typically fetch the flights from the controller or model
// For example: $flights = FlightController::getAllFlights();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Flight Tracker</title>
</head>
<body>
    <h1>All Flights</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Airline</th>
                <th>Flight Number</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flights as $flight): ?>
                <tr>
                    <td><?php echo htmlspecialchars($flight['id']); ?></td>
                    <td><?php echo htmlspecialchars($flight['airline']); ?></td>
                    <td><?php echo htmlspecialchars($flight['flight_number']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>