<?php
require '../ch13_enhancement/model/value.php';
 
    if (!isset($investment)) { $investment = '10000'; } 
    if (!isset($interest_rate)) { $interest_rate = '5'; } 
    if (!isset($years)) { $years = '5'; } 
   
        $action = filter_input(INPUT_POST, 'action');
        if ($action == NULL) {
            $action = filter_input(INPUT_GET, 'action');
            if ($action == NULL) {
                $action = 'future_value';
                include('../ch13_enhancement/view/future_value.php');
        }
    }
  
  if ($action == 'calculate'){
    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', 
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', 
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', 
            FILTER_VALIDATE_INT);
    $compound_interest = $years * 12;
    $months = filter_input(INPUT_POST, 'months');
    
    //validate investment
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
        include('../ch13_enhancement/index.php');
        exit();
    }
  
    if (isset($months)) {
        $compound_monthly = 'Yes';
    }else if (!isset($months)) {
        $compound_monthly = 'No';
    }
    
    $future_value = FV\get_future_value($investment, $interest_rate, $compound_interest, $years, $months);
    $yearly_rate_f = FV\apply_percent_formatting($interest_rate);
    $investment_f = FV\apply_currency_formatting($investment);
    $future_value_f = FV\apply_currency_formatting($future_value);
   
  include '../ch13_enhancement/view/display_results.php';
  }
 
?>