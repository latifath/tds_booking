<?php

if(!function_exists('format_price_xof')) {
    function format_price_xof($price){
        return number_format($price, 0, '.', ' ') . ' XOF' ;
    }
}















?>
