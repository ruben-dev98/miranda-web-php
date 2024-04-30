<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');
    $ci = new DateTime($_GET['check_in']);
    $co = new DateTime($_GET['check_out']);

    $params = ['check_in' => $ci->format('U'), 'check_out' => $co->format('U')];
    $rooms = Connection::selectCheckAvailability($conn, $queryRoomsCheckAvailabilityWithDates, $params);
    $conn->close();

    $templateName = 'roomsList';
    $values = ['title' => 'Rooms', 'rooms' => $rooms];
    renderTemplate($templateName, $values);
?>