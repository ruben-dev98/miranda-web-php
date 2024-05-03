<?php
    require_once(__DIR__ .'/helpers/setup.php');

    $rooms = Connection::executeQuery($conn, $queryAllRooms);
    $formatRooms = formatListRooms($rooms);
    $conn->close();

    $values = ['rooms' => $formatRooms];
    renderTemplate('rooms', $values);
?>