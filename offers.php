<?php
    require_once(__DIR__ .'/helpers/setup.php');

    $rooms = Connection::executeQuery($conn, $queryAllOfferRooms);
    $popularRooms = Connection::executeQuery($conn, $queryRoomsOnSwiper);
    $conn->close();

    $values = ['rooms' => $rooms, 'popularRooms' => $popularRooms];
    renderTemplate('offers', $values);
?>