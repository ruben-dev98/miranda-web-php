<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');

    $rooms = Connection::select($conn, $queryAllRooms);
    $conn->close();

    $templateName = 'sampleSwiper';
    $values = ['title' => 'Sample', 'rooms' => $rooms];
    renderTemplate($templateName, $values);
?>