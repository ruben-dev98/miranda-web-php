<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'index';
    $values = ['title' => 'Home'];
    renderTemplate($templateName, $values);
?>