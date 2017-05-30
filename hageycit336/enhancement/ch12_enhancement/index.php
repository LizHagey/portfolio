<?php
/*1. Insure that the controller and all views have access to the session.
2. Create a persistent session that will last for two weeks.
3. Store the values from the Future Value input form into the session and populate 
 * the form with the values from the session when the page containing the form is 
 * loaded if there are values in the session, otherwise make the form inputs blank.
4. The calculation capability of the application remains unchanged. */
// Start session management with a persistent cookie
//Note from teacher: I'd recommend setting the session variables after doing the validation part. You don't want to store invalid data in the session.
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();
require '/hageycit336/enhancement/ch12_enhancement/model/value.php';

        $action = filter_input(INPUT_POST, 'action');
        if ($action == NULL) {
            $action = filter_input(INPUT_GET, 'action');
            if ($action == NULL) {
                $action = 'future_value';
                $years = isset($_SESSION['years'])? $_SESSION['years']: '';
                $investment = isset($_SESSION['investment'])? $_SESSION['investment']: '';
                $interest_rate = isset($_SESSION['interest_rate'])? $_SESSION['interest_rate']: '';
                $months = isset($_SESSION['months'])? $_SESSION['months']: '';
                include('/hageycit336/enhancement/ch12_enhancement/view/future_value.php');
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
    
    $_SESSION['investment'] = $investment;
    $_SESSION['interest_rate'] = $interest_rate;
    $_SESSION['years'] = $years;
    $_SESSION['months'] = $months;
    
    
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
        include('index.php');
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
   
  include ('/hageycit336/enhancement/ch12_enhancement/view/display_results.php');
  }
 
?>