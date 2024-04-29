<?php
    require_once(__DIR__ .'/helpers/renderTemplate.php');

    $templateName = 'offers';
    $values = ['title' => 'Offers'];
    renderTemplate($templateName, $values);
?>