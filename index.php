<?php
    require_once(__DIR__ .'/helpers/setup.php');
    session_start();
    $success = '0';
    $redirection = '0';
    
    if(isset($_GET['success']) && !isset($_SESSION['is_success'])) {
        $_SESSION['is_success'] = 1;
        $success = $_GET['success'];
    } else {
        unset($_SESSION['is_success']);
    }

    if(isset($_GET['rooms'])) $redirection = $_GET['rooms'];

    $rooms = Connection::executeQuery($conn, $queryMostPrice);
    $formatRooms = formatListRooms($rooms);
    $conn->close();

    $values = ['rooms' => $formatRooms, 'success' => $success, 'redirection' => $redirection];
    renderTemplate('index', $values);
?>