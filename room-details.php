<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');
    $id = $_GET['id'];
    $room = Connection::selectRoom($conn, $queryOneRoom, $id);
    $rooms = Connection::select($conn, $queryRoomsOnSwiper);
    $conn->close();

    $templateName = 'roomDetails';
    $values = ['title' => 'Rooms Details', 'rooms' => $rooms, 'room' => $room];
    renderTemplate($templateName, $values);
?>