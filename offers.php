<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');

    $rooms = Connection::select($conn, $queryAllOfferRooms);
    $popularRooms = Connection::select($conn, $queryRoomsOnSwiper);
    $conn->close();

    $templateName = 'offers';
    $values = ['title' => 'Offers', 'rooms' => $rooms, 'popularRooms' => $popularRooms];
    renderTemplate($templateName, $values);
?>