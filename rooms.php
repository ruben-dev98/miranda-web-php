<?php
    require_once(__DIR__ .'/helpers/setup.php');

    $rooms = Connection::executeQuery($conn, $queryAllRooms);
    $conn->close();

    $values = ['rooms' => $rooms];
    renderTemplate('rooms', $values);
?>