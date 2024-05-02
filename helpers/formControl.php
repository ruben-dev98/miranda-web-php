<?php
    function formControl() {
        if(count($_POST) === 0) {
            return null;
        }
        
        $form = [];
        foreach($_POST as $key => $value) {
            $form[$key] = $value;
        }
        return $form;
    }
?>