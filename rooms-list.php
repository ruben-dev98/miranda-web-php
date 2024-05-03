<?php
    require_once(__DIR__ .'/helpers/setup.php');
    $check_in = $_GET['check_in'];
    $check_out = $_GET['check_out'];

    $params = ['check_in' => $check_in, 'check_out' => $check_out];
    $rooms = Connection::executeQueryWithParams($conn, $queryRoomsCheckAvailabilityWithDates, $params, 'ss');
    $conn->close();

    $values = ['rooms' => $rooms, 'check_in' => $check_in, 'check_out' => $check_out];
    renderTemplate('roomList', $values);
?>