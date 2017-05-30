<?php 
if (empty($years)){
    $years = ' ';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="/hageycit336/enhancement/ch12_enhancement/main.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="calculate">

        <div id="data">
            <label>Investment Amount:</label>
            <select name="investment">
                <?php for ($i = 10000; $i <= 50000; $i += 5000) : ?>
                <option value="<?php echo $i; ?>" <?php if ($i == $investment) echo'selected';?>><?php echo number_format($i); ?></option>
                <?php endfor; ?>
            </select><br>

            <label>Yearly Interest Rate:</label>
            <select name="interest_rate">
                <?php for ($i = 4; $i <= 12; $i += .5) : ?>
                <option value="<?php echo $i; ?>" <?php if ($i == $interest_rate) echo'selected';?>><?php echo number_format($i, 2); ?></option>
                <?php endfor; ?>
            </select><br>
            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br>
            
            <input type="checkbox" name="months" checked>Compound Interest Monthly<br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="hidden" name="action"
                           value="calculate">
            <input type="submit" value="Calculate"/><br>
        </div>

    </form>
    </main>
</body>
</html>

