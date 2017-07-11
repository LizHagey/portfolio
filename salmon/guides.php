<!DOCTYPE html>
<!--
Final Exam Website
-->
<html>
    <head>
        <title>Guides | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/head.php'; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Guides for Salmon River Adventures">
    </head>
    
    <body>
        <div class="bodyBackground">
        <header>
       <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/header.php'; ?> 
    </header>
        <nav>
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/navigation.php'; ?>   
        </nav>
        <main>
     
            <h1>Meet Our Guides</h1>
            <figure>
                <h2><a href="/salmon/john.php">John</a></h2>
                <a href="/CSS/salmon/john.php"><img src="/salmon/media/john.jpg" alt="John"></a>
            </figure> 
            <figure>
                <h2><a href="/salmon/charlie.php">Charlie</a></h2>
                <a href="/CSS/salmon/charlie.php"><img src="/salmon/media/charlie.jpg" alt="Charlie"></a>
            </figure> 
            <figure>
                <h2><a href="/salmon/zander.php">Zander</a></h2>
                <a href="/CSS/salmon/zander.php"><img src="/salmon/media/zander.jpg" alt="Zander"></a>
            </figure> 
           
        </main>
            <footer>
             <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/footer.php'; ?>    
            </footer>
        </div>
       
    </body>
</html>
