<?php
    require_once(__DIR__ .'/helpers/setup.php');
    if(isset($_GET['check_in'])) $check_in = $_GET['check_in'];
    if(isset($_GET['check_out'])) $check_out = $_GET['check_out'];

    $params = [$check_out, $check_in];
    $rooms = Connection::executeQueryWithParams($conn, $queryAllRoomsCheckAvailability, $params, 'ss');
    $formatRooms = formatListRooms($rooms);
    $conn->close();

    $values = ['rooms' => $formatRooms, 'check_in' => $check_in, 'check_out' => $check_out];
    renderTemplate('roomsList', $values);
?>