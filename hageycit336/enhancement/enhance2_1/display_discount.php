<?php
$product_description = filter_input(INPUT_POST, 'product_description');
$list_price = filter_input(INPUT_POST,'list_price', FILTER_VALIDATE_FLOAT);
$discount_percent = filter_input(INPUT_POST,'discount_percent', FILTER_VALIDATE_FLOAT);
$tax = .08;

$discount_amount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount_amount;
$sales_tax = $discount_price * $tax;
$final_price = $discount_price + $sales_tax;

if ($product_description == '') {
    $error_message = 'Must enter a product';
}else if ($list_price <=0 || $list_price >=10000){
    $error_message = 'Price must be greater than zero and less than ten thousand dollars';
}else if ($list_price === FALSE){
    $error_message = 'Price must be a valid whole number';
}else if ($discount_percent === FALSE){
    $error_message = 'Discount percent must be a valid whole number';
}else if ($discount_percent <= 0 || $discount_percent > 15) {
    $error_message = 'Discount percent must be greater than zero and less than 15';
}else {
    $error_message = '';
}

if ($error_message !='') {
    include('index.php');
    exit();
}

$list_price_f =  "$".number_format($list_price, 2);
$discount_percent_f = $discount_percent."%";
$discount_amount_f = "$".  number_format($discount_amount, 2);
$discount_price_f = "$".  number_format($discount_price, 2);
$sales_tax_f = "$".  number_format($sales_tax, 2);
$final_price_f = "$".  number_format($final_price, 2);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br><br>
        
        <label>Sales Tax:</label>
        <span><?php echo $sales_tax_f; ?></span><br>
        
        <label>Final Price:</label>
        <span><?php echo $final_price_f; ?></span><br>
    </main>
</body>
</html>