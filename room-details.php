<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'layout';
    $values = ['title' => 'Rooms Details'];
    renderTemplate($templateName, $values);
?>