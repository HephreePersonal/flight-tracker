<?php
// This file is responsible for rendering the view that displays the list of airlines.

require_once '../../../config/database.php';
require_once '../../models/Airline.php';

$airlines = Airline::all(); // Fetch all airlines from the database

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Airlines Maintenance</title>
</head>
<body>
    <h1>Airlines Maintenance</h1>
    <table>
        <thead>
            <tr>
                <th>Airline ID</th>
                <th>Airline Name</th>
                <th>Code</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Renamed To Airline ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($airlines as $airline): ?>
                <tr>
                    <td><?php echo htmlspecialchars($airline->AirlineID); ?></td>
                    <td><?php echo htmlspecialchars($airline->AirlineName); ?></td>
                    <td><?php echo htmlspecialchars($airline->code); ?></td>
                    <td><?php echo htmlspecialchars($airline->AirlineFromDate); ?></td>
                    <td><?php echo htmlspecialchars($airline->AirlineToDate); ?></td>
                    <td><?php echo htmlspecialchars($airline->RenamedToAirlineID); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
