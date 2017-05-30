<?php
/*
 * A controller to handle the contact page processing
 */
 session_start();

if($_POST['action'] == 'Send'){
    //Collect the data sent from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    //$princess = $_POST['princess'];
    $kids = $_POST['kids'];
    $length = $_POST['length'];
    $message = $_POST['message'];
    $captcha = $_POST['cap_code'];
    $princesses = implode(', ', $_POST['princess'] );

    
    //Check the fields that they are not empty
if (empty($name) || empty($email) || empty($message) 
    || empty($phone) || empty($date) && isset($princesses) && isset($length)){
    $errors['fields'] = 'All fields are required, please fill in each one.';
}

    //Check that the captcha code matched the picture.
if ($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
    $errors['security'] = 'Sorry, your entered security code does not match the security image.';
}

    //If there are errors, return the contact page to fix them.
if (!empty($errors)) {
    include '../contact/contact.php';
    exit;
}
    //Assemble the message
    $finalmessage = "Name: $name \n";
    $finalmessage .= "Phone Number: $phone \n";
    $finalmessage .= "Email: $email \n";
    $finalmessage .= "Childs Name and Age: $age \n";
    $finalmessage .= "Date and Time of Party: $date \n";
    $finalmessage .= "Address of Party: $address \n";
    $finalmessage .= "Princess(es) Invited to the Party: $princesses \n";
    $finalmessage .= "Number of kids at the Party: $kids \n";
    $finalmessage .= "Length of the Party: $length \n";
    $finalmessage .= "Message: \n $message";
    
    //Send the message
//    $to = 'enchantedmomentslv@gmail.com';
    $to = 'lizgrhagey@gmail.com';
    $from = "From: $email";
    $result = mail($to, $subject, $finalmessage, $from);
    
    //Let the sender know what happened
    if ($result == TRUE) {
        $errors[] = "Thank you $name for contacting me.";
} else {
    $errors[] = "Sorry $name but there was an error and message could not be sent.";
}

//Remove all values previously stored
unset($name);
unset($phone);
unset($email);
unset($age);
unset($date);
unset($address);
unset($princess);
unset($kids);
unset($length);
unset($message);
unset($captcha);

//Display the contact age with the new message
    include '../contact/contact.php';
    exit;
} else {
    include '../contact/contact.php';
    exit;

}


?>