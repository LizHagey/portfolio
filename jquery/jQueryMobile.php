<!DOCTYPE html>
<html lang="en">
    <head>
        <title>jQuery | Mobile</title>
        <!-- Include meta tag to ensure proper rendering and touch zooming -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

        <!-- Include the jQuery library -->
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Include the jQuery Mobile library -->
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>  
    </head>
    <body>
      <!-- Page One -->
      <div data-role="page" id="pageone">
          
          <!-- Panel -->
          <div data-role="panel" id="myPanel"> 
            <h2>Panel</h2>
            <p>You can close the panel by clicking outside the panel, pressing the Esc key, by swiping, or by clicking the button below:</p>
            <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Close panel</a>
          </div> 

          <!-- Header -->
        <div data-role="header">
          <h1>Header</h1>
        </div>
          
          <!-- Main Content -->
          <div data-role="main" class="ui-content">
            <p>Welcome!</p>
            <p>jQuery Mobile works on all popular smartphones and tablets</p>
            <img src="mobileDevises.JPG" alt="Mobile Devises" style="width: 90%;"><br><br>
            
          <!-- Link to Page Two -->
            <a href="#pagetwo" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Go to Page Two</a>    
          
          <!-- Panel Button -->
            <p>You can open a panel easily using jQuery Mobile</p>
            <a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Open Panel</a>
          
          <!-- Collapsible panels --> 
            <div data-role="collapsibleset">
            <div data-role="collapsible">
              <h3>Click me - I'm collapsible!</h3>
              <p>I'm the expanded content.</p>
            </div>
            <div data-role="collapsible" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u">
              <h3>Click me - I'm collapsible!</h3>
              <p>I'm the expanded content.</p>
            </div>
            <div data-role="collapsible" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u">
              <h3>Click me - I'm collapsible!</h3>
              <p>I'm the expanded content.</p>
            </div>
            <div data-role="collapsible" data-iconpos="right">
              <h3>Click me - I'm collapsible!</h3>
              <p>I'm the expanded content.</p>
            </div>
          </div>
          
          <!-- Footer -->
          <div data-role="footer">
          <h1>Footer</h1>
        </div>
      </div>  

        
      <!-- Page Two -->
      <div data-role="page" id="pagetwo">
        <div data-role="header">
           <h1>Header</h1>
           <!-- Search Button -->
           <a href="#" class="ui-btn ui-shadow ui-icon-search ui-btn-icon-left">Search</a>
        </div>
            <!-- Main Content -->
            <div data-role="main" class="ui-content">
                <p>Examples of pop up messages</p>
                <!-- Pop up Buttons -->
                <a href="#myPopUp" data-rel="popup" class="ui-btn ui-shadow ui-btn-inline ui-icon-alert ui-btn-icon-left">Alert</a>
                <div data-role="popup" id="myPopUp" class="ui-content">
                    <h3>Welcome to jQuery Mobile page 2!</h3>
                </div>
            <a href="#myPopUp2" data-rel="popup" class="ui-btn ui-shadow ui-btn-inline ui-icon-arrow-r ui-btn-icon-right" data-transition="slide">Slide transition</a>
                <div data-role="popup" id="myPopUp2" class="ui-content">
                    <h3>Slide transition pop up</h3>
                </div>    
            <a href="#myPopUp3" data-rel="popup" class="ui-btn ui-shadow ui-btn-inline" data-transition="flip">Flip transition</a>
                <div data-role="popup" id="myPopUp3" class="ui-content">
                    <h3>Flip transition pop up</h3>
                </div>  
            </div>
 
        <!-- Footer -->
        <div data-role="footer">
          <a href="#" class="ui-shadow ui-btn ui-icon-info ui-btn-icon-left">About Us</a>
          <a href="#pageone" class="ui-shadow ui-btn ui-icon-home ui-btn-icon-left">Home</a>
          <a href="#" class="ui-shadow ui-btn ui-icon-back ui-btn-icon-left" data-rel="back">Go Back</a>
          <a href="#pageone" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b ui-icon-back ui-btn-icon-left" data-rel="back">Go Back</a>
        </div>

      </div>  
        
    </body>
</html>

