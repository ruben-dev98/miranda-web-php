<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');
    require_once(__DIR__ .'/helpers/config.php');

    $templateName = 'index';
    $values = ['title' => 'Home'];
    renderTemplate($templateName, $values);
?>