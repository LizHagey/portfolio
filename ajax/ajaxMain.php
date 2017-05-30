<!DOCTYPE html>
<html lang="en">
<head>
<title>Portfolio | AJAX</title>
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
<section>
    
    <h1>AJAX</h1>
    
    <p>AJAX can change part of a page without refreshing the entire page. </p>
	
<!--	<div id="Testdiv">
		<input type="button" value="Test Button" onclick="getFileFromServer( '/portfolio/ajax/test1.txt', 'Testdiv', false )"/>
        </div><br>-->
     
</section>

<script>
function getFileFromServer(url, divId, isJSON){
    
	var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function() {	
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		changeTheView(xmlhttp.responseText, divId, isJSON);
	}
	
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

function changeTheView (response, divId, isJSON) {
	
	var responseText =  response;

	document.getElementById( divId ).innerHTML =  responseText;
}
</script>

        <h3>Find your favorite Recipe: Using AJAX there will be hints for the recipe as you start typing:</h3>

        <form action=""> 
        <input type="text" id="txt1" onkeyup="showHint(this.value)">
        <span id="txtHint"></span>
        </form>
        <br><br>
<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>

       <script>
        function getFileFromServerTwo(url, divId, isJSON){
    
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {	
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    changeTheViewTwo(xmlhttp.responseText, divId, isJSON);
            }
	
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
        }

        function changeTheViewTwo (response, divId, isJSON) {

            var responseText = (isJSON) ? JSON.parse(response) : response;
            document.getElementById( divId ).innerHTML = (isJSON) ? responseText.byuClass : responseText;
        }     
       </script>
 
                    <h1>JSON</h1>
                    <br>
                    <div id="JSONdiv">
                        <input type="button" value="Read a JSON file" onclick="getFileFromServerTwo( '/ajax/JSONFile.json', 'JSONdiv', true )"/>
	</div>
    </div>       
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?> 
</footer>
</body>

</html>



