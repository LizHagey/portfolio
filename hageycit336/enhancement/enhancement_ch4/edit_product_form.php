<?php
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$productName = filter_input(INPUT_POST, 'productName');
$productCode = filter_input(INPUT_POST, 'productCode');
$listPrice = filter_input(INPUT_POST, 'listPrice', FILTER_VALIDATE_FLOAT);

?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Edit Product</h1>
        <form action="edit_product.php" method="post"
              id="edit_product_form">
            
            <input type="hidden" name="product" value="<?php echo $product_id; ?>"><br>

            <label>Category ID:</label>
            <input type="text" name="category" value="<?php echo $category_id; ?>"><br>

            <label>Code:</label>
            <input type="text" name="code"value="<?php echo $productCode; ?>"><br>

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $productName; ?>"><br>

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $listPrice; ?>"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
