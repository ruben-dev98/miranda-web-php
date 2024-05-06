<?php

function validateForm($data) {
    foreach ($data as $value) {
        $data[] = htmlspecialchars($value, ENT_QUOTES);
    }
    return $data;
}