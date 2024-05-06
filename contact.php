<?php
    require_once(__DIR__ .'/helpers/setup.php');
    session_start();

    $formContact = formControl();
    
    if($formContact !== null) {
        $insertSuccessfully = Connection::executeQueryInsert($conn, $queryInsertMessage, $formContact, 'sssss');
    }
    
    $values = ['formContact' => $formContact, 'operationSuccessful' => $insertSuccessfully];
    renderTemplate('contact', $values);
?>