<?php
header('Content-Type: text/xml');
echo'<?xml version="1.0" encoding="UTF-8" STANDALONE="YES" ?>';

echo '<response>';
    $food = $_GET['food'];
    $foodArray = array('tuna', 'bacon', 'beef', 'ham');
    if (in_array($food, $foodArray)){
        echo 'We do have '.$food.'!';
    } elseif ($food == '') {
            echo 'Enter a food';
    } else {
            echo 'Sorry we dont sell ' .$food.'!';
    }
echo '</response>';
?>
