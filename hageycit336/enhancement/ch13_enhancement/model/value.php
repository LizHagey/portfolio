<?php
namespace FV {
function get_future_value($investment, $interest_rate, $compound_interest, $years, $months = FALSE) {
    if(isset($months)) {
        $future_value = $investment;
        for ($i = 1; $i <= $compound_interest; $i++) {
        $future_value = ($future_value + ($future_value * ($interest_rate *.01 / 12)));
        } 
        
    } else if(!isset($months)){
        $future_value = $investment;
        for ($i = 1; $i <= $years; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01)); 
        } 
    }
   return $future_value;
}

function apply_currency_formatting($i){
    $i = '$' .number_format($i, 2);
    return $i;
}

function apply_percent_formatting($i) {
     $i = $i.'%';
     return $i;  
} 
}

?>