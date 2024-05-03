<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__.'/helpers/formControl.php');
    session_start();

    $formContact = formControl();
    if($formContact === null) {
        unset($_SESSION['times']);
    }

    $templateName = 'contact';
    $values = ['title' => 'Contact', 'formContact' => $formContact];
    renderTemplate($templateName, $values);
?>