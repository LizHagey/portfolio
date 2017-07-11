<!DOCTYPE html>
<!--
Final Exam Website
-->
<html>
    <head>
        <title>Home | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/head.php'; ?>
        
        <meta name="description" content="Home page for Salmon River Adventures">
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
            <h1>Salmon River Adventures</h1>  
            <figure id="mainFigure"><img src="/salmon/media/river.jpg" id="mainImage" alt="salmon River surrounded by mountains.">
            <figcaption id="mainImageCaption">The Salmon River is a world-class whitewater river in the remote mountains of central Idaho.</figcaption>
            </figure>
            
            <h2>Explore the river of no return through one of our many adventures!</h2>
            <div>
                    <h2>White Water Rafting</h2>
                    <a href="/salmon/rafting.php"><img src="/salmon/media/grouprafting.jpg" alt="Group rafting on the river"></a>
            </div> 
            <div class="description">
                    <p>Whitewater rafting is a fabulous, exciting, and safe way for a group to play together in a wilderness setting. In addition to enjoying the fun of rafting, there is an excellent opportunity for groups to work together, develop/increase teamwork, trust and camaraderie, and return home or to work refreshed, energized and with a greater sense of community.  It is a spectacular, fun and challenging river experience for the whole family.  You will experience scenic views of the central Idaho mountains, see waterfalls and have an Exhilarating river experience.</p>
            </div>  
           
            <div>
                <h2>Kayaking/Canoeing</h2>
                <a href="/salmon/kayaking.php"><img src="/salmon/media/KayakingGroup.jpg" alt="Group kayaking on the river"></a>
            </div>
            <div class="description">
                <p>Kayaking is an exciting activity for all ages. Challenge yourself to a fantastic whitewater adventure with a guided inflatable kayak trip. Our inflatable kayaks are designed for maximum performance with superb comfort and enhanced stability. They are fun, comfortable and handle rapids well--perfect for one of the most exciting attractions in Salmon River Adventures Idaho.  Or you can come hike on of our trails on your own</p>
            </div>
            <div>
                <h2>Hiking</h2>
                <a href="/salmon/hiking.php"><img src="/salmon/media/familyhikingtwo.jpg" alt="Group hiking along the river"></a>
            </div>
            <div class="description">
                <p>Try some of our awesome trails along the Salmon river.  Our guides will take you on a hike that is perfect for your level of activity.  They range from family friendly hikes that are 1 to 3 miles to difficult hikes for the avid hiker and adventure seeker.  These hikes will take you through the beautiful terrain of the central Idaho mountains.  There are also many trails for you to experience without the need of a guide if that is what you like to do. </p>
            </div>
                    
             <h2>For more information or to reserve your adventure call 1-800-555-5555 or send us a message through our contact page</h2>     
            
          
        </main>
            <footer>
             <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/footer.php'; ?>    
            </footer>
        </div>
        
    </body>
</html>
