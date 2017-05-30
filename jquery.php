<!DOCTYPE html>
<html lang="en">
<head>
<title>Portfolio | jQuery</title>

     <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
      <meta name="description" content="Portfolio">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
           $(document).ready(function() {
              $("#title").click(function() {
                  $("#pict").slideToggle(1000);
              }); 
	
    $("ul#single li").mouseover(function(){
        $(this).stop().animate({height:'400px'},{queue:false, duration:600});
    });
 
    $("ul#single li").mouseout(function(){
         $(this).stop().animate({height:'42px'},{queue:false, duration:600});
    });
	
	//horizontal
    $("ul#horizontal li").mouseover(function(){
        $(this).stop().animate({width:'400px'},{queue:false, duration:600});
    });
 
    $("ul#horizontal li").mouseout(function(){
        $(this).stop().animate({width:'40px'},{queue:false, duration:600});
    });
	
	//vertical
	 $("ul#vertical li").mouseover(function(){
        $(this).stop().animate({height:'400px'},{queue:false, duration:600});
    });
 
    $("ul#vertical li").mouseout(function(){
        $(this).stop().animate({height:'42px'},{queue:false, duration:600});
    });
 
});
 
    </script>
    <style>
#pict {
        display: none;
        background: #86c98a;
        width: 400px;
        height: 200px;
}
ol, ul {
	list-style: none;
}
h1 { font: bold 40px/40px Helvetica, Arial, Sans-serif; text-align: center; color: #eee; text-shadow: 0px 2px 6px #333; }
h2 { font: bold 30px/30px Helvetica, Arial, Sans-serif; color: #BFBF00; text-shadow: 0px 2px 6px #999; margin-left:20px;}
body {
}
body a {
	text-decoration:none;
}
#wrapper {
	width:900px;
	margin-left:auto;
	margin-right:auto;
	overflow:visible;
	margin-top:20px;
}
#horizontal li img{ border:solid 4px #999999; -moz-border-radius: 5px;
    -webkit-border-radius: 5px;}
#horizontal li {
	height:400px;
	width:42px;
	float:left;
	cursor:pointer;
	overflow:hidden;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    line-height: 1;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999;
    text-shadow: 0 -1px 1px #222;
    border-bottom: 1px solid #222;
}
 
#vertical li img{ border:solid 4px #999999; -moz-border-radius: 5px;
    -webkit-border-radius: 5px;}
#vertical li {
	height:42px;
	width:400px;
	cursor:pointer;
	overflow:hidden;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    line-height: 1;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999;
    text-shadow: 0 -1px 1px #222;
    border-bottom: 1px solid #222;
}
#single li img{ border:solid 4px #999999; -moz-border-radius: 5px;
    -webkit-border-radius: 5px;}
#single li {
	height:42px;
	width:400px;
	cursor:pointer;
	overflow:hidden;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    line-height: 1;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px #999;
    -webkit-box-shadow: 0 1px 3px #999;
    text-shadow: 0 -1px 1px #222;
    border-bottom: 1px solid #222;
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
    <div class="bodyBackground">
    <h1>jQuery</h1>
    <br>
    <h1>This page is still under construction</h1>
    
    <a href="jquery/jQueryMobile.php">jQuery Mobile Page</a> 
    
    <h3>Mouse over to see pictures</h3>
<ul id="single"> 
    <li><img src="/media/carmelcorn.jpg" width="400" alt="" height="400" /></li> 
	</ul> 
	
	<br>
 
<!--	<h2>Horizontal Gallery Effect</h2>
	
	<ul id="horizontal"> 
            <li><img src="/media/carmelcorn.jpg" alt="Carmel Corn" style="width:400px; height:400px;"/></li> 
            <li><img src="/media/noBakeCookies.jpg" alt="No Bake" style="width:400px; height:400px;" /></li>
            <li><img src="/media/tacosTwo.jpg" alt="Tacos" style="width:400px; height:400px;" /></li>
            <li><img src="/media/spammusubi.jpg" alt="Musubi" style="width:400px; height:400px;" /></li>
            <li><img src="/media/grilledPorkMushroom.jpg" alt="Grilled Mushrooms" style="width:400px; height:400px;" /></li>
            <li><img src="/media/ricenoodledelight.jpg" alt="Rice Noodle" style="width:400px; height:400px;" /></li>
	</ul> 
	
	<br><br>
	
	<h2>Vertical Gallery Effect</h2>
	
	<ul id="vertical"> 
            <li><img src="/media/carmelcorn.jpg" alt="Carmel Corn" style="width:400px; height:400px;"/></li> 
            <li><img src="/media/noBakeCookies.jpg" alt="No Bake" style="width:400px; height:400px;" /></li>
            <li><img src="/media/tacosTwo.jpg" alt="Tacos" style="width:400px; height:400px;" /></li>
            <li><img src="/media/spammusubi.jpg" alt="Musubi" style="width:400px; height:400px;" /></li>
            <li><img src="/media/grilledPorkMushroom.jpg" alt="Grilled Mushrooms" style="width:400px; height:400px;" /></li>
            <li><img src="/media/ricenoodledelight.jpg" alt="Rice Noodle" style="width:400px; height:400px;" /></li>
	</ul> -->

    </div>
   
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?> 
</footer>
</body>

</html>



