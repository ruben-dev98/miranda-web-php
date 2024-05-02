<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');
    $check_in_date = new DateTime($_GET['check_in']);
    $check_out_date = new DateTime($_GET['check_out']);
    $check_in = $check_in_date->format('Y-m-d H:i:s');
    $check_out = $check_out_date->format('Y-m-d H:i:s');

    $params = ['check_in' => $check_in, 'check_out' => $check_out];
    $rooms = Connection::selectCheckAvailability($conn, $queryRoomsCheckAvailabilityWithDates, $params);
    $conn->close();

    $templateName = 'roomsList';
    $values = ['title' => 'Rooms', 'rooms' => $rooms];
    renderTemplate($templateName, $values);
?>