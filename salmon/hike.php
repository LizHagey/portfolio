<!DOCTYPE html>
<!--
Final Exam Website
-->
<html>
    <head>
        <title>Hiking | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/head.php'; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Hiking at Salmon River Adventures">
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
            <h1>You will have picture perfect views as you hike along the Salmon River</h1>
            <figure class='adventures'>
                    <h2>Family Friendly Hikes</h2>
                    <img src="/salmon/media/familyhiking.jpg" alt="kids hiking along the river">
    
                    <figcaption>Enjoy the greatest views and scenery like no where else.  We have hikes for all ages and activity levels.</figcaption>
            </figure>    
           
            <figure class='adventures'>
                <h2>Back Packing</h2>
                <img src="/salmon/media/backpackiing.jpg" alt="Group back packing along the river">
                <figcaption>Join one of our group back packing trips along the river.</figcaption>
            </figure>
          <h2>For more information or to reserve your adventure call 1-800-555-5555 or send us a message through our contact page</h2> 
          
        </main>
            <footer>
             <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/footer.php'; ?>    
            </footer>
        </div>
        
    </body>
</html>
