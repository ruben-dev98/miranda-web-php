<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');
    require_once(__DIR__.'/helpers/formControl.php');
    
    $id = $_GET['id'];
    $check_in = $_GET['check_in'];
    $check_out = $_GET['check_out'];
    $formBooking = formControl();
    if($formBooking !== null) {
        print_r($formBooking);
    } else {
        echo 'JAJA SALU2';
    }

    $room = Connection::selectRoom($conn, $queryOneRoom, $id);
    $rooms = Connection::select($conn, $queryRoomsOnSwiper);
    $conn->close();

    $templateName = 'roomDetails';
    $values = ['title' => 'Rooms Details', 'rooms' => $rooms, 'room' => $room, 'check_in' => $check_in, 'check_out' => $check_out];
    renderTemplate($templateName, $values);
?>