<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'layout';
    $values = ['title' => 'Offers'];
    renderTemplate($templateName, $values);
?>