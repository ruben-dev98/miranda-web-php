<?php
    require_once(__DIR__ .'/helpers/setup.php');
    session_start();

    $formContact = formControl();
    
    if($formContact === null) {
        unset($_SESSION['times']);
    } else {
        $dataValidated = validateForm($formContact);
        $insertSuccessfully = Connection::executeQueryInsert($conn, $queryInsertMessage, $dataValidated, 'sssss');
    }

    $values = ['formContact' => $formContact, 'operationSuccessful' => $insertSuccessfully];
    renderTemplate('contact', $values);
?>