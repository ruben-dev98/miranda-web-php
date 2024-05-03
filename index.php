<?php
    require_once(__DIR__ .'/helpers/setup.php');

    $rooms = Connection::executeQuery($conn, $queryMostPrice);
    $formatRooms = formatListRooms($rooms);
    $conn->close();

    $values = ['rooms' => $formatRooms];
    renderTemplate('index', $values);
?>