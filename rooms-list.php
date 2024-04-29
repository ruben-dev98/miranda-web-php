<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'rooms-list';
    $values = ['title' => 'Rooms'];
    renderTemplate($templateName, $values);
?>