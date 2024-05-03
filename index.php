<?php
    require_once(__DIR__ .'/helpers/setup.php');

    $rooms = Connection::executeQuery($conn, $queryMostPrice);
    $conn->close();

    $values = ['rooms' => $rooms];
    renderTemplate('index', $values);
?>