<?php
    require_once(__DIR__ .'/helpers/setup.php');

    $rooms = Connection::executeQuery($conn, $queryAllOfferRooms);
    $formatRooms = formatListRooms($rooms);
    $popularRooms = Connection::executeQuery($conn, $queryRoomsOnSwiper);
    $formatPopularRooms = formatListRooms($popularRooms);
    $conn->close();

    $values = ['rooms' => $formatRooms, 'popularRooms' => $formatPopularRooms];
    renderTemplate('offers', $values);
?>