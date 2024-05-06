<?php
    function isEmpty($key) {
        if(!isset($_POST[$key]) || empty($_POST[$key])) {
            return true;
        }
        return false;
    }
    
    function formControl() {
        if($_SERVER['REQUEST_METHOD'] !== 'POST') {
            unset($_SESSION['times']);
            return null;
        }

        if((count($_POST) === 0 || isset($_SESSION['times']))) {
            return null;
        }

        $_SESSION['times'] = 1;
        
        $form = [];
        
        foreach($_POST as $key => $value) {
            if(isEmpty($key)) {
                $form[] = null;
            } else {
                $form[] = htmlspecialchars($value, ENT_QUOTES);
            }
        }
        
        return $form;
    }
?>