<?php session_start(); ?>
<!DOCTYPE html>
<!--
Princess Parties
-->

<html>
    <head>
        <title>Enchanted Moments | Contact</title>
        
        <meta name="description" content="Contact page for Princess Parties">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
        </script>
        
    </head>
    
    <body>
        <div class="bodyBackground">
        <header>
       
    </header>
        <nav>
           
        </nav>
        <div id="contactPage">
            
            <h1>Contact Me to Plan Your Party</h1> 
            <?php
                if(!empty($errors)){
                    echo '<ul class="notify">';
                    foreach($errors as $error) {
                        echo "<li>$error</li>";
                    }
                    echo '</ul>';
                    unset($errors);
                }
                ?>
            <p>Please contact me using the provided form. All fields are required.</p>
            <p>Or, you may call me direct if you prefer: (702) 575-4243</p><br>
            <form method="post" action="." id="contactform"> <br> 
                <img id="contactPageLogo" src="/images/logo.png" alt="logo"><br>
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" size="50" value="<?php echo $name;  ?>" required> <br><br>
                <label for="name">Phone Number:</label><br>
                <input type="text" name="phone" id="phone" size="50" value="<?php echo $phone;  ?>" required> <br><br>
                
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" size="50" value="<?php echo $email;  ?>" required><br><br>
                <label for="name">Name and Age of Birthday Child:</label><br>
                <input type="text" name="age" id="age" size="50" value="<?php echo $age;  ?>" > <br><br>
                <label for="name">Date of Party:</label><br>
                <input type="text" name="date" id="datepicker" size="50" value="<?php echo $date;  ?>" required> <br><br>
                <label for="name">Address of Party:</label><br>
                <input type="text" name="address" id="address" size="50" value="<?php echo $address;  ?>" required> <br><br>
                <label for="princess[]">Princess(es) Invited to the Party:</label><br>
               <br>
                <input type="checkbox" name="princess[]" value="Ice Queen">  Ice Queen
                <br>
                <input type="checkbox" name="princess[]" value="Ice Princess">  Ice Princess
                <br>
                <input type="checkbox" name="princess[]" value="Cinderella">  Cinderella
                <br>
                <input type="checkbox" name="princess[]" value="Fairest">  The Fairest Princess
                <br>
                <input type="checkbox" name="princess[]" value="Tink">  Tinker Bell
                <br>
                <input type="checkbox" name="princess[]" value="Beauty">  Princess Beauty
                <br>
                <input type="checkbox" name="princess[]" value="Mermaid">  Mermaid Princess
                <br>
                
                
<!--                <br><br>-->
<!--               <label for="subject">Princess(es) Invited to the Party:</label><br>
                <input type="text" name="princess" id="princess" size="50" value="<?php  //echo $princess;  ?>" required><br><br>-->
                <label for="name">Number of Kids at Party:</label><br>
                <input type="text" name="kids" id="kids" size="50" value="<?php echo $kids;  ?>" > <br><br>
                <label for="name">Length of Party:</label><br>
                <select name="length">
                <option value="">Select...</option>
                <option value="Pop In Party">Pop In Princess Party (20 Min)</option>
                <option value="Enchanting Princess Party">Enchanting Princess Party (60 Min)</option>
                <option value="Royal Princess Party">Royal Princess Party (90 Min)</option>
                <option value="Princess Makeover Party">Princess Makeover Party (120 Min)</option>
                </select><br><br>
<!--                <input type="text" name="length" id="length" size="50" value="<?php //echo $length;  ?>" required> <br><br>-->
                
                <label for="message">Message: (Please include any allergies or additional activities)</label><br>
                <textarea name="message" id="message" cols="50" rows="10" required><?php echo $message;  ?></textarea><br><br>
               
            <!-- This displays the captcha image -->
<label>&nbsp;</label>
<img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)<br>
<!-- This allows the user to type in what they see -->
<label for="cap_code">Security Code:</label><br>
<input id="cap_code" name="cap_code" type="text" size="6" required> <br>
 <label for="action">&nbsp;</label><br>
 <input type="submit" name="action" id="action" value="Send"><br><br><br>
            </form>
            <br><br>
        </div>
            <footer>
             
            </footer>
       
       
    </body>
</html>

