<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'layout';
    $values = ['title' => 'Contact'];
    renderTemplate($templateName, $values);
?>