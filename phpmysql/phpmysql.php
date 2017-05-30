<!DOCTYPE html>
<html lang="en">
<head>
<title>Portfolio | PHP/MySQL</title>
<link href="/portfolioCSS/portfolioStyle.css" type="text/css" rel="stylesheet" media="screen"/>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
       <meta name="description" content="Portfolio">
</head>
<body>
    <header id="pageHeader">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/header.php'; ?>
    </header>
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/navigation.php'; ?>           
    </nav>
    <div class="bodyBackground">
    <h1>PHP/MySQL</h1>
    <h3>Dynamic backend example</h3>
    <a href="/admin/index.php" class="link" target="_blank"><img src="/phpmysql/recipeAdmin.JPG" alt="Backend Page"></a>
    <br><br>
    <h3>Contact Page</h3>
    <a href="/salmon/contact/index.php" class="link" target="_blank"><img src="/phpmysql/contactPage.JPG" alt="Contact Page"></a>
    <br><br>
    <h3>Registration Page</h3>
    <a href="/phpmysql/phpmysql.php" class="link" >Registration Page (still under construction)</a>
    <br><br>
    <h3>Future Value Calculator</h3>
    <a href="/future_value/index.php" class="link" target="_blank">Calculator</a>
    <br><br>
    
    </div>
   
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?> 
</footer>
</body>

</html>





