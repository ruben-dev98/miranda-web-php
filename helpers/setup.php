<?php
    require_once(__DIR__ .'/../blade/BladeOne.php');
    require_once(__DIR__ . '/../class/Connection.class.php');
    require_once(__DIR__.'/convertFunctions.php');
    require_once(__DIR__.'/queries.php');
    require_once(__DIR__.'/formControl.php');

    use eftec\bladeone\BladeOne;

    $env = parse_ini_file('.env');
    $views = __DIR__ . '/../views';
    $cache = __DIR__ . '/../cache';
    $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
    
    $conn = new Connection($env['HOST'], $env['USERNAME'], $env['PASSWORD'], $env['DB_NAME'], $env['SQL_PORT']);
    
    function renderTemplate($templateName, $values = []) {
        global $blade;
        echo $blade->run($templateName, $values);
    }
?>