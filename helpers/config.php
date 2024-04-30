<?php
    require_once(__DIR__ . '/../class/Connection.class.php');
    $env = parse_ini_file('.env');
    
    $conn = new Connection($env['HOST'], $env['USERNAME'], $env['PASSWORD'], $env['DB_NAME'], $env['SQL_PORT']);
?>