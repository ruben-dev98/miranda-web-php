<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');
    $check_in = $_GET['check_in'];
    $check_out = $_GET['check_out'];

    $params = ['check_in' => $check_in, 'check_out' => $check_out];
    $rooms = Connection::selectCheckAvailability($conn, $queryRoomsCheckAvailabilityWithDates, $params);
    $conn->close();

    $templateName = 'roomsList';
    $values = ['title' => 'Rooms', 'rooms' => $rooms, 'check_in' => $check_in, 'check_out' => $check_out];
    renderTemplate($templateName, $values);
?>