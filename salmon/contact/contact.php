<?php session_start(); ?>
<!DOCTYPE html>
<!--
Final Exam Website
-->

<html>
    <head>
        <title>Contact Page | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/head.php'; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1>Contact Me</h1> 
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
            <form method="post" action="." id="contactform">                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" size="50" value="<?php echo $name;  ?>" required> <br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" size="50" value="<?php echo $email;  ?>" required><br>
                <label for="subject">Subject</label><br>
                <input type="text" name="subject" id="subject" size="50" value="<?php echo $subject;  ?>" required><br>
                <label for="message">Message</label><br>
                <textarea name="message" id="message" cols="50" rows="10" required><?php echo $message;  ?></textarea><br><br>
               
            <!-- This displays the captcha image -->
<label>&nbsp;</label>
<img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)<br>
<!-- This allows the user to type in what they see -->
<label for="cap_code">Security Code:</label><br>
<input id="cap_code" name="cap_code" type="text" size="6" required> <br>
 <label for="action">&nbsp;</label><br>
                <input type="submit" name="action" id="action" value="Send"><br>
            </form>

        </main>
            <footer>
             <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/Modules/footer.php'; ?>    
            </footer>
        </div>
       
    </body>
</html>

