<!DOCTYPE html>
<!--
My site home page
-->
<html lang="en-us">
  <head>
       <title>Portfolio | CSS3 Animations</title>
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
          
            <main>
                <div class="bodyBackground">
                                        
              <h1>CSS Animations</h1>
              
              <div id='one'>
                <div class="flip-container">
                        <div class="flipper" onclick="this.classList.toggle('flipped')">
                                <div class="front">
                                    <img src="media/noBakeCookies.jpg" alt="Cookies" style="width:380px;" >
                                    <p class="bottom">Click to see recipe</p>
                                </div>
                                <div id="backone" class="back">
                                    <h3>Recipe</h3>
                                        <ul>
                                            <li>2 cups sugar</li>
                                            <li>1/2 cup milk</li>
                                            <li>3 teaspoons cocoa</li>
                                            <li>1 stick butter or margarine</li>
                                            <li>A pinch of salt</li>
                                        </ul>
                                        <p>Boil together for one minute then remove from the stove.</p>
                                        <p>Quickly Add</p>
                                        <ul>
                                            <li>3 cups quick oatmeal (although oatmeal is gluten free, make sure the packaging says gluten free, otherwise there may be cross contamination.)</li>
                                            <li>1/3 cup peanut butter</li>
                                            <li>1 teaspoon vanilla</li>
                                        </ul>
                                        <p>Mix well</p>
                                        <p>Drop on wax paper and chill</p>
                                </div>
                        </div>
                </div>
             </div>
 

             <div id='two'>
                <div class="flip-container2">
                        <div class="flipper2" onclick="this.classList.toggle('flipped')">
                                <div class="front2">
                                    <img src="media/ricenoodledelight.jpg" alt="Rice Noodles" style="width:380px;">
                                    <p class="bottom">Click to see recipe.</p>
                                </div>
                                <div id="backtwo" class="back2">
                                    <h4>Ingredients</h4>
                                    <ul>
                                        <li>1 sliced red and yellow bell pepper</li>
                                        <li>1 chopped onion</li>
                                        <li>1 cup broccoli</li>
                                        <li>Sliced steak, chicken or pork</li>
                                        <li>2 Tbsp. olive oil</li>
                                        <li>1 pkg. Rice noodles</li>
                                    </ul>

                                    <h4>Ingredients for Sauce</h4>
                                    <ul>
                                        <li>1 cup water</li>
                                        <li>1 tsp. corn starch</li>
                                        <li>2 Tbsp. soy sauce</li>
                                        <li>1/2 Tbsp. sugar</li>
                                        <li>1 tsp. salt</li>
                                    </ul>

                                    <h4>Directions</h4>
                                    <p>In frying pan or Wok, cook meat and onions in oil until meat is brown.</p>
                                    <p>Add chopped peppers and broccoli and cook until crispy tender</p>
                                    <p>Whip sauce ingredients in bowl, then add to meat and vegetable mixture</p>
                                    <p>Cook for an additional 10 minutes uncovered.(The sauce will not thicken like gravy, but will 
                                        be absorbed by the rice noodles when combined.)</p>
                                    <p>Cook rice noodles as directed on package.</p>
                                    <p>Combine with rice noodles and serve.</p>
                                </div>
                        </div>
                </div>
             </div>
              <br><br>
              <div id="effects">
                    <h1 id="rubberBand">Rubber Band Effect</h1>
                  
                    <h1 id="hinge">Hinge Effect</h1>
              </div>
<!--                              <div class="bodyBackground">-->
                    <h1>CSS3 Transitions</h1>
                <h3>This square will slowly enlarge to the right when you hover over it.</h3>
                <div id="square"> </div>
                
                <h3>This square will quickly enlarge to the right when you hover over it, but there is a 2 second delay first.</h3>
                <div id="square2"> </div>
                
                <h3>Shadow will appear when you hover over the rectangle</h3>
                <div id="rect"> </div>
                                
                <h3>This will rotate</h3>
                <div id="square3"> </div>
                
                <h3>This will move up & change color when you hover using the y coordinate</h3>
                <div id="square4"> </div>
                
                <h3>This will move to the right & transform into a circle</h3>
                <div id="square5"> </div>
               
                     
                </div>
            </main>
           
           
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
             
           
    </body>
</html>





