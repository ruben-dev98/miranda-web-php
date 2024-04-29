<?php
    require_once(__DIR__ .'/setup.php');
    
    function renderTemplate($templateName, $values) {
        global $blade;
        echo $blade->run($templateName, $values);
    }
?>