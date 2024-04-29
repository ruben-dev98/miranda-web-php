<?php
    $env = parse_ini_file('.env');
    $conn = new mysqli($env['HOST'], $env['USERNAME'], $env['PASSWORD'], $env['DB_NAME'], $env['SQL_PORT']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>