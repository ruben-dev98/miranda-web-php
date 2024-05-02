<?php
    require_once(__DIR__ .'/setup.php');
    require_once(__DIR__.'/convertFunctions.php');
    require_once(__DIR__.'/queries.php');
    
    function renderTemplate($templateName, $values) {
        global $blade;
        echo $blade->run($templateName, $values);
    }
?>