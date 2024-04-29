<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'rooms';
    $values = ['title' => 'Rooms'];
    renderTemplate($templateName, $values);
?>