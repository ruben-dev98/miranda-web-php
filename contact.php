<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'contact';
    $values = ['title' => 'Contact'];
    renderTemplate($templateName, $values);
?>