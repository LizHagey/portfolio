<!DOCTYPE html>
<!--
Portfolio Bootstrap page
-->
<html lang="en-us">
  <head>
        <title>Home | Portfolio</title>
        <meta name="description" content="Portfolio bootstrap examples">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="bootstrap.css" type="text/css" rel="stylesheet" media="screen"/>
  </head>
  <body>
      <div class="page-header">
          <img class="img-responsive" src="Logo1.jpg" alt="Logo">
      </div>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
           
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Page 1</a></li>
              <li><a href="#">Page 2</a></li> 
              <li><a href="#">Page 3</a></li> 
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
          <div class="jumbotron">
              <h1>Options</h1> 
          </div>
      </div>
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-4">
                  <div class="thumbnail">
                    <h2>Canvas Prints</h2>
                    <img class="img-responsive" src="lake.jpg" alt="Lake">
                    <div class="caption">
                    <p>$120 for 60 inch wide prints</p>
                    </div>
                  </div>
              </div> 
              <div class="col-sm-4">
                  <div class="thumbnail">
                  <h2>Vinyl Prints</h2>
                  <img class="img-responsive" src="lighthouse.jpg" alt="Lighthouse">
                    <div class="caption">
                      <p>$120 for 60 inch wide prints</p>
                    </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="thumbnail">
                  <h2>Lifesize Cutouts</h2>
                  <img class="img-responsive" src="sunset.jpg" alt="Logo">
                  <div class="caption">
                    <p>$120 for 60 inch wide prints</p>
                  </div>
                  </div>
              </div>
          </div>
      </div>
      
  </body>

