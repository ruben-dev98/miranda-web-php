<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');

    $rooms = Connection::select($conn, $queryRoomsOnSwiper);
    $conn->close();

    $templateName = 'roomDetails';
    $values = ['title' => 'Rooms Details', 'rooms' => $rooms];
    renderTemplate($templateName, $values);
?>