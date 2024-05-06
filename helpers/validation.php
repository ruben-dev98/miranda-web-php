<?php

function validateForm($data) {
    foreach ($data as $key => $value) {
        $data[$key] = htmlspecialchars($value, ENT_QUOTES);
    }
    return $data;
}