<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'about';
    $values = ['title' => 'About'];
    renderTemplate($templateName, $values);
?>