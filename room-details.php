<?php
    require_once(__DIR__ .'/helpers/setup.php');
    session_start();

    $id = $_GET['id'];
    $check_in = $_GET['check_in'];
    $check_out = $_GET['check_out'];
    $formBooking = formControl();
    if($formBooking === null) {
        unset($_SESSION['times']);
    }

    $room = Connection::executeQueryWithParams($conn, $queryOneRoom, [$id], 'i');
    $rooms = Connection::executeQuery($conn, $queryRoomsOnSwiper);
    $conn->close();

    $templateName = 'roomDetails';
    $values = ['rooms' => $rooms, 'room' => $room, 'check_in' => $check_in, 'check_out' => $check_out, 'formBooking' => $formBooking];
    renderTemplate('roomDetails', $values);
?>