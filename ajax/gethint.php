<?php
// Array of recipes
$a[] = "Chocolate Chip Cookies";
$a[] = "Taco's";
$a[] = "Chicken Dinner";
$a[] = "Carmel Popcorn";
$a[] = "No Bake Cookies";
$a[] = "Home Made Bread";
$a[] = "Salmon";
$a[] = "Stir Fry";
$a[] = "Fried Rice";
$a[] = "Hot Dogs";
$a[] = "Hamburgers";
$a[] = "Salads";
$a[] = "Fish dinner";
$a[] = "Shrimp";
$a[] = "Smoothies";
$a[] = "Spaghetti";
$a[] = "Potatoes";
$a[] = "Chicken Alfredo";
$a[] = "Peanut Butter Cookies";
$a[] = "Sugar Cookies";
$a[] = "Bread";
$a[] = "Enchiladas";
$a[] = "Jelly";
$a[] = "Lemmon Pepper Wings";
$a[] = "Hot Wings";
$a[] = "Chicken Fingers";
$a[] = "Pork Ribs";
$a[] = "BBQ Sauce";
$a[] = "Vegan dish";
$a[] = "Waffles";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = "<br> $name";
            } else {
                $hint .= "<br> $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>

