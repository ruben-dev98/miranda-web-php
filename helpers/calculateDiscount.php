<?php 
    function calculateDiscount($price, $discount) {
        $resultPriceOnCent = $price - ($price * $discount / 100);
        return round($resultPriceOnCent/100);
    }

    function formatNumber($number) {
        
    }
?>