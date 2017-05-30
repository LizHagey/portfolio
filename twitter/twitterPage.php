<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Elizabeth Hagey">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" type="text/css" rel="stylesheet" media="screen"/>
        <title>Twitter | Project</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script> 
       $(function() {
  
        function animateMe(el, startStyle, endStyle, duration, repeat){
          setTimeout(function(){animateMe(el, startStyle, endStyle, duration, repeat)}, repeat);
          el.css(startStyle);
          el.animate(endStyle, duration, 'linear', function(){
            el.css(startStyle);
          });
        }    

        w = $(document).width()
        animateMe($('#news'),{right: w}, {right: -1268}, 60000, 63000);
        animateMe($('#soccer'),{right: w}, {right: -1068}, 90000, 93000);
        animateMe($('#sports'),{right: w}, {right: -1168}, 50000, 73000);
        animateMe($('#entertainment'),{right: w}, {right: -1068}, 130000, 90000);
        animateMe($('#food'),{right: w}, {right: -1200}, 30000, 63000);
        animateMe($('#politics'),{right: w}, {right: -1100}, 40000, 83000);
        animateMe($('#football'),{right: w}, {right: -1000}, 75000, 70000);
        animateMe($('#weather'),{right: w}, {right: -1020}, 115000, 78000);
      });</script>

    
    </head>
    <body>
        <div class="bodyBackground">
            <div id="top">
        <h1>Twitter Search App</h1>
        <h3>Search any subject and find the most recent tweets made in Twitter.</h3>
        <h3>Find what interests you at the click of a button!</h3>
        <img id="news" src="news.jpg" alt="News">
        <img id="soccer" src="soccer.jpg" alt="Soccer">
        <img id="sports" src="sports.jpg" alt="sports">
        <img id="entertainment" src="entertainment.jpg" alt="entertainment">
        <img id="food" src="food.jpg" alt="food">
        <img id="politics" src="politics.jpg" alt="politics">
        <img id="football" src="football.jpg" alt="football">
        <img id="weather" src="weather.jpg" alt="weather">
            </div>
        <div id="leftColumn">
            <img id="sitepict" src="siteSearch.JPG" alt="Site Search">
        </div>
        <div id="rightColumn">
            <h3>Features:</h3>
            <ul>
                <li>Quick Search</li>
                <li>Most Recent 15 Tweets</li>
                <li>Will Find Topic of Your Choice</li>
                
               
            </ul>
           
            <br><br>
            <h3>Search the latest trends and find out what is being tweeted</h3>
            <h3>Displays the username and post</h3>
            <h3>Click the link to try out the app</h3>
            <br><br><br>
            <a href="https://protected-eyrie-60205.herokuapp.com/twitter.jsp" target="_blank">Visit Site</a>
       
        </div>
       
         </div>
    </body>
    
</html>

