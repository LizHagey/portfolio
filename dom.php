<!DOCTYPE html>
<!--
My site home page
-->
<html lang="en-us">
  <head>
       <title>Portfolio |DOM</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
       <meta name="description" content="Portfolio">
       <script>
            function change2(){
               document.getElementById("carmel").style.width = "100px";
           }
           function myMove() {
            var elem = document.getElementById("redBox");   
            var pos = 0;
            var id = setInterval(frame, 5);
            function frame() {
              if (pos == 350) {
                clearInterval(id);
              } else {
                pos++; 
                elem.style.top = pos + 'px'; 
                elem.style.left = pos + 'px'; 
              }
            }
          }
          
            var mouseTest = document.getElementById("result");
            mouseTest.addEventListener("click", buttonTest1());
            mouseTest.addEventListener("mouseout", buttonTest2());
          function buttonTest1() {
            document.getElementById("resultOne").innerHTML += "clicked!<br>";
            
          }
          function buttonTest2() {
             document.getElementById("resultOne").innerHTML += "You have clicked the target!<br>"; 
          }
         
       </script>
       <style>
            #mainArea {
                width: 400px;
                height: 400px;
                position: relative;
                background: white;
                border: black;
            }
            #redBox {
                width: 50px;
                height: 50px;
                position: absolute;
                background: red;
                -moz-border-radius: 25px;
                -webkit-border-radius: 25px;
                border-radius: 25px;
            }
       </style>
       
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
                <h1>DOM Page</h1> 
                <h3>Click to make image small using DOM</h3>
                  <img id="carmel" src="media/carmelcorn.jpg" alt="carmel corn" onclick="change2()">
                  <br><br>
                  <button onclick="myMove()">Click Here to make the red ball move</button>
                  <br>
                <div id ="mainArea">
                <div id ="redBox"></div>
                </div>
                  <br><br>
                  <button id="result" onclick="buttonTest1()">Click</button>
                  <p id="resultOne"></p>
                  <button onclick="buttonTest2()">addEventListener Button</button>

                  <br><br>
                  <a href="/ajax/ajaxMain.php" id="ajaxLink">Click here for Ajax and JSON Examples</a>
                  <br><br>
                </div>
            
            </main>
           
           
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
             
           
    </body>
</html>

