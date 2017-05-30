<!DOCTYPE html>

<html lang="en-us">
  <head>
       <title>Portfolio | JavaScript</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
       <meta name="description" content="Portfolio">
       <link href="javascript.css" type="text/css" rel="stylesheet">
       <script src="Javascript1.js" type="text/javascript"></script>
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
                    <h1 style="color:#E99F12">JavaScript</h1>
<!--                    <h1>Twinkling stars</h1>
                    <div class="galaxy"></div>-->
                    <h3>Manipulation of CSS3 class properties using javaScript</h3>
                      <table id="table">
                        <tr id="tableHead">
                        <th><strong>Cool colors</strong></th>
                        <th><strong>Warm colors</strong></th>
                       </tr>
                        <tr class="row">
                            <td class="cell">blue</td>
                            <td class="cell">red</td>
                        </tr>
                        <tr class="row">
                            <td class="cell">pink</td>
                            <td class="cell">orange</td>
                        </tr>
                        
                    </table>
                    <br><br>
                    <input class="button" type="button" value="click this button to change the style of the table" onclick="style1()" />
                    <input class="button" type="button" value="Click this to change again" onclick="style2()" />
                    <h1 id="test">Test</h1>
                    <input class="button" type="button" value="Change test to pink" onclick="style3()" />
                    
                    <br><br>
                    <h3 style="color:#E99F12">JavaScript Events</h3>
                  
                    <p>These are well named and mostly self explanatory</p>
                    <span onmouseover="this.style.color='red'">This paragraph will change when your mouse goes over
                        it to something different.</span><br>
                    <span onclick="this.style.color='aqua'">This paragraph will change when you click
                    it to something different.</span>
                        
                        <h2 style="color:#E99F12">Slide in upon scroll animation</h2>
                        
<div class="container cf">
    <!-- recipe one -->
    <div class="animation-element slide-left recipe">
      <div class="header">
        <div class="left">
            <img src="/media/carmelcorn.jpg" alt="Caramel Popcorn" />
        </div>
        <div class="right">
          <h3>Caramel Popcorn</h3>
          <h4>Amazing Gluten Free Dessert</h4>
        </div>
      </div>
      <div class="content"> 
      <h4>Ingredients</h4>
                <ul>
                    <li>1/2 Cup butter melted</li>
                    <li>1 lb brown sugar</li>
                    <li>1 Cup Karo syrup</li>
                    <li>1 can sweetened condensed milk</li>
                    <li>1 tsp. vanilla</li>
                    <li>popcorn (I used 1 cup popcorn kernel's and used an air popper.  It made about 8 cups popcorn.)</li>
                </ul>
                <h4>Directions</h4>
                <p>Bring butter, brown sugar, and Karo syrup to a boil</p>
                <p>Add sweetened condensed milk, turn the heat down to medium and let boil, stirring often,
                til it reaches a softball stage. (Soft ball stage: Carmel dropped into cold water will form a soft, 
                flexible ball. If you remove the ball from water, it will 
                flatten after a few moments in your hand.)</p>
                <p>Remove from heat and stir in the vanilla</p>
                <p>Pour over popcorn and stir until all popcorn is coated with carmel.</p>
                <p>Let cool</p>
      </div>
      
    </div>
    <!--recipe two -->
    <div class="animation-element slide-right recipe">
      <div class="header">
        <div class="left">
            <img src="/media/spammusubi.jpg" alt="Spam Musubi"/>
        </div>
        <div class="right">
          <h3>Spam Musubi</h3>
          <h4>Delicious and Nutritious</h4>
        </div>
      </div>
      <div class="content"> 
          <h4>Ingredients</h4>
                <ul>
                    <li>1 Can Spam</li>
                    <li>Seaweed wrap (Nori)</li>
                    <li>Furikake (sprinkle)</li>
                    <li>2 Tbsp. brown sugar</li>
                    <li>1/4 cup Aloha shoyu (soy sauce)</li>
                    <li>3 cups Calrose rice</li>
                </ul>
                <h4>Directions</h4>
                <p>Cut spam in half, then half again, then half again... until 
                you have 8 pieces.</p>
                <p>Pour 1/4 cup shoyu and 2 Tbsp brown sugar in frying pan and stir.</p>
                <p>Fry spam in the mixture about 3 minutes, turning until coated and brown</p>
                <p>Lay seaweed out on surface; center mold on seaweed; and put rice in mold.</p>
                <p>Put spam slice on the rice</p>
                <p>Sprinkle Furikake on the spam, then add another layer of rice</p>
                <p>Push it down with a wet mold lid and remove mold base while
                holding the lid down</p>
                <p>Remove lid and wrap the seaweed sealing it with water.</p>
      </div>
      
    </div>
    <!--recipe three -->
    <div class="animation-element slide-left recipe">
      <div class="header">
        <div class="left">
            <img src="/media/carmelcorn.jpg" alt="Caramel Popcorn" />
        </div>
        <div class="right">
          <h3 style="color:#E99F12">Caramel Popcorn</h3>
          <h4>Amazing Gluten Free Dessert</h4>
        </div>
      </div>
      <div class="content"> 
      <h4>Ingredients</h4>
                <ul>
                    <li>1/2 Cup butter melted</li>
                    <li>1 lb brown sugar</li>
                    <li>1 Cup Karo syrup</li>
                    <li>1 can sweetened condensed milk</li>
                    <li>1 tsp. vanilla</li>
                    <li>popcorn (I used 1 cup popcorn kernel's and used an air popper.  It made about 8 cups popcorn.)</li>
                </ul>
                <h4>Directions</h4>
                <p>Bring butter, brown sugar, and Karo syrup to a boil</p>
                <p>Add sweetened condensed milk, turn the heat down to medium and let boil, stirring often,
                til it reaches a softball stage. (Soft ball stage: Carmel dropped into cold water will form a soft, 
                flexible ball. If you remove the ball from water, it will 
                flatten after a few moments in your hand.)</p>
                <p>Remove from heat and stir in the vanilla</p>
                <p>Pour over popcorn and stir until all popcorn is coated with carmel.</p>
                <p>Let cool</p>
      </div>
    </div>
        
    <!--recipe four -->
    <div class="animation-element slide-right recipe">
      <div class="header">
        <div class="left">
            <img src="/media/spammusubi.jpg" alt="Spam Musubi"/>
        </div>
        <div class="right">
          <h3>Spam Musubi</h3>
          <h4>Delicious and Nutritious</h4>
        </div>
      </div>
      <div class="content">
        <h4>Ingredients</h4>
                <ul>
                    <li>1 Can Spam</li>
                    <li>Seaweed wrap (Nori)</li>
                    <li>Furikake (sprinkle)</li>
                    <li>2 Tbsp. brown sugar</li>
                    <li>1/4 cup Aloha shoyu (soy sauce)</li>
                    <li>3 cups Calrose rice</li>
                </ul>
                <h4>Directions</h4>
                <p>Cut spam in half, then half again, then half again... until 
                you have 8 pieces.</p>
                <p>Pour 1/4 cup shoyu and 2 Tbsp brown sugar in frying pan and stir.</p>
                <p>Fry spam in the mixture about 3 minutes, turning until coated and brown</p>
                <p>Lay seaweed out on surface; center mold on seaweed; and put rice in mold.</p>
                <p>Put spam slice on the rice</p>
                <p>Sprinkle Furikake on the spam, then add another layer of rice</p>
                <p>Push it down with a wet mold lid and remove mold base while
                holding the lid down</p>
                <p>Remove lid and wrap the seaweed sealing it with water.</p>  
      </div>
      
    </div>
</div>
<!--<h1 style="color:#E99F12">Loan Calculator</h1>
<form style="width:550px;">
    <label style="color:#fff;">Amount borrowed </label>
<input type="number" placeholder="Principal" id="Borrowed"> <br><br>
<label style="color:#fff;">Annual interest rate</label>
<input type="number" placeholder="example: .065" id="rate"> <br><br>
<label style="color:#fff;">Number of years </label>
<input type="number" id="numYears"> <br><br>
<label style="color:#fff;">Payments per years </label>
<input type="number" id="payPerYear"> <br><br>
<button type="button" onclick="doPayment()">Compute Payment</button><br><br>
<div id="outputPayment" style="color:#E99F12"> </div><br>
<label style="color:#fff;">Number of payments paid to date 
<input type="number" id="numDate"> <br><br>
<button type="button" onclick="doBalance()">Compute Payoff Amount</button><br><br>
<div id="outputBalance" style="color:#E99F12"> </div><br>
<button type="reset">Reset</button>
<div id="outputReset"> </div>
</form>            
                        <div id="jscalc">            -->
<!--            <h1 style="color:#E99F12">JavaScript Loan Calculator</h1>
            <form style="width:310px;">
                <p>Amount borrowed  
            <input id="input" type="number" placeholder="Principal" id="Borrowed"></p>  
            <p>Annual interest rate
                <input id="input" type="number" placeholder="example: .065" id="rate"></p>
            <p>Number of years 
                <input id="input" type="number" id="numYears"> </p>
            <p>Payments per years 
                <input id="input" type="number" id="payPerYear"> </p>
            <button type="button" onclick="doPayment()">Compute Payment</button>
            <div id="outputPayment" style="color:#E99F12"> </div><br>
            <p>Number of payments paid to date 
                <input type="number" id="numDate"> </p>
            <button type="button" onclick="doBalance()">Compute Payoff Amount</button><br><br>
            <div id="outputBalance" style="color:#E99F12"> </div>
            <button type="reset">Reset</button>
            <div id="outputReset" style="color:#E99F12"> </div>
            </form>-->
                        </div>      
         
            </main>
           
           
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
            
           
    </body>
</html>


