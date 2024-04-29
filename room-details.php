<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'room-details';
    $values = ['title' => 'Rooms Details'];
    renderTemplate($templateName, $values);
?>