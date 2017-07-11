<!DOCTYPE html>
<!--
Final Exam Website
-->
<html>
    <head>
        <title>Home | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Salmon/Modules/head.php'; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class="bodyBackground">
        <header>
       <?php include $_SERVER['DOCUMENT_ROOT'] . '/Salmon/Modules/header.php'; ?> 
    </header>
        <nav>
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/Salmon/Modules/navigation.php'; ?>   
        </nav>
        <main>
            <h1>Salmon River Adventures</h1>  
            <figure id="mainFigure"><img src="/Salmon/media/whiteWaterRafting.jpg" id="mainImage" alt="Salmon River surrounded by mountains.">
      <figcaption id="mainImageCaption">The river of no return</figcaption>
    </figure>
            <h1></h1><h2></h2>
            <figure>
                    <h2></h2>
                    <a href="rafting.php"><img src="/Salmon/media/grouprafting.jpg" alt="Group rafting on the river"></a>
    
                    <figcaption></figcaption>
            </figure>    
           
            <figure>
                <h2></h2>
                <a href="kayaking.php"><img src="/Salmon/media/KayakingGroup.jpg" alt="Group kayaking on the river"></a>
                <figcaption></figcaption>
            </figure>
            <figure>
                <h2></h2>
                <a href="hiking.php"><img src="/Salmon/media/familyhikingtwo.jpg" alt="Group hiking along the river"></a>
                <figcaption></figcaption>
            </figure>
                    
                
            
          
        </main>
            <footer>
             <?php include $_SERVER['DOCUMENT_ROOT'] . '/Salmon/Modules/footer.php'; ?>    
            </footer>
        </div>
        <script src=”/Salmon/javaScript/rotator.js”></script>
    </body>
</html>
