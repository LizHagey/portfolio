<?php
    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', 
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', 
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', 
            FILTER_VALIDATE_INT);
    $compound_interest = $years * 12;
    
    $action = filter_input(INPUT_POST, 'action');
        if ($action == NULL) {
            $action = filter_input(INPUT_GET, 'action');
            if ($action == NULL) {
                $action = 'future_value';
        }
    }
    if ($action == 'future_value') {
    if (!isset($investment)) { $investment = '10000'; } 
    if (!isset($interest_rate)) { $interest_rate = '5'; } 
    if (!isset($years)) { $years = '5'; } 
    include('/view/future_value.php');
    }
    
    // validate investment
  if ($action == 'calculate'){
    if ($investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; 
    // validate interest rate
    } else if ( $interest_rate === FALSE )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; 
    // validate years
    } else if ( $years === FALSE ) {
        $error_message = 'Years must be a valid whole number.';
    } else if ( $years <= 0 ) {
        $error_message = 'Years must be greater than zero.';
    } else if ( $years > 30 ) {
        $error_message = 'Years must be less than 31.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; 
    }
  
    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }
  

    // calculate the future value
  
    $compound_monthly = filter_input(INPUT_POST, 'compound_interest');
    if (!isset($compound_monthly)) {
        $compound_monthly = 'NO';
        $future_value = $investment;
        for ($i = 1; $i <= $years; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01)); 
        $investment_f = '$'.number_format($investment, 2);
        $yearly_rate_f = $interest_rate.'%';
        $future_value_f = '$'.number_format($future_value, 2);
        
     } 
    }else {
        $compound_monthly = 'YES';
        $future_value = $investment;
        for ($i = 1; $i <= $compound_interest; $i++) {
        $future_value = ($future_value + ($future_value * ($interest_rate *.01 / 12)));
        
    }
        // apply currency and percent formatting
        $investment_f = '$'.number_format($investment, 2);
        $yearly_rate_f = $interest_rate.'%';
        $future_value_f = '$'.number_format($future_value, 2);
       
    }include '/view/display_results.php';
  }
    
    
?>