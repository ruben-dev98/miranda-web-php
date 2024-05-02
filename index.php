<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');

    $rooms = Connection::select($conn, $queryMostPrice);
    $conn->close();

    $templateName = 'index';
    $values = ['title' => 'Home', 'rooms' => $rooms];
    renderTemplate($templateName, $values);
?>