<?php
    require_once(__DIR__ .'/helpers/setup.php');
    session_start();

    $id = $_GET['id'];
    $check_in = $_GET['check_in'];
    $check_out = $_GET['check_out'];
    $insertSuccessfully = false;
    
    $formBooking = formControl();
    
    if($formBooking !== null) {
        if($check_in === null) {
            $roomIsAvailable = Connection::executeQueryWithParams($conn, $queryOneRoomCheckAvailability, [$check_out, $check_in, $id], 'ssi');
        }
        
        if(count($roomIsAvailable) > 0) {
            $insertSuccessfully = Connection::executeQueryInsert($conn, $queryInsertBooking, $formBooking, 'ssssssi');
        }
    }

    $room = Connection::executeQueryWithParams($conn, $queryOneRoom, [$id], 'i')[0];
    $roomFormat = formatRoom($room);
    
    $rooms = Connection::executeQuery($conn, $queryRoomsOnSwiper);
    $formatRooms = formatListRooms($rooms);
    
    $conn->close();

    $templateName = 'roomDetails';
    $values = ['rooms' => $formatRooms, 'room' => $roomFormat, 'check_in' => $check_in, 'check_out' => $check_out, 'formBooking' => $formBooking, 'operationSuccessful' => $insertSuccessfully];
    renderTemplate('roomDetails', $values);
?>