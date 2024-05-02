<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__.'/helpers/formControl.php');

    $formContact = formControl();

    $templateName = 'contact';
    $values = ['title' => 'Contact', 'formContact' => $formContact];
    renderTemplate($templateName, $values);
?>