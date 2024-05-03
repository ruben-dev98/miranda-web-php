<?php
    function formControl() {
        if(count($_POST) === 0 || isset($_SESSION['times'])) {
            return null;
        }
        
        $_SESSION['times'] = 1;
        
        $form = [];
        
        foreach($_POST as $key => $value) {
            $form[$key] = $value;
        }
        
        return $form;
    }
?>