<?php
    require_once(__DIR__ .'/helpers/setup.php');
    session_start();

    $formContact = formControl();
    
    if($formContact !== null) {
        $insertSuccessfully = Connection::executeQueryInsert($conn, $queryInsertMessage, $formContact, 'sssss');
    }
    
    $conn->close();

    if($insertSuccessfully) {
        header( 'Location: /index.php?success=1&rooms=0 ');
    }

    $values = ['formContact' => $formContact, 'operationSuccessful' => $insertSuccessfully];
    renderTemplate('contact', $values);
?>