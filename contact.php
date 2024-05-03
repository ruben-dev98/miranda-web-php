<?php
    require_once(__DIR__ .'/helpers/setup.php');
    session_start();

    $formContact = formControl();
    if($formContact === null) {
        unset($_SESSION['times']);
    }

    $values = ['formContact' => $formContact];
    renderTemplate('contact', $values);
?>