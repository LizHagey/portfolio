<?php
// Get the product data
$category = filter_input(INPUT_POST, 'category', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
$product = filter_input(INPUT_POST, 'product');

// Validate inputs
if ($category == null || $product == false ||
        $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Edit the product to the database  
    $query = 'UPDATE products
        SET 
        categoryID = :category, 
        productName = :name,
        listPrice = :price,
        productCode = :code
        WHERE productID = :product';
    try {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $statement = $db->prepare($query);
    $statement->bindValue(':category', $category);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':product', $product);
    $statement->execute();
    $statement->closeCursor();
    echo "Successfully updated product";
     } catch (Exception $ex) {
         include('error.php');
    }

    // Display the Product List page
    include('index.php');
}
?>