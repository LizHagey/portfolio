<!DOCTYPE html>
<!--
Home page CIT 336
-->
<html lang="en-us">
  <head>
       <title>Home | CIT 336</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/hageycit336/modules/head.php'; ?>
       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  </head>
    <body>
        <header>
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/hageycit336/modules/header.php'; ?>
        </header>
          <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/hageycit336/modules/navigation.php'; ?>           
          </nav>
        <main>
            <h1>Teaching Presentation</h1>
            <h1>String functions: echo, trim, printf, strtotime</h1>
            
            <h2>echo</h2>
            <p>
                echo '< h1 >String Functions< /h1 >';<br>
                echo 'This sends data to the browser< br >';<br>
                echo 'doesn\'t return a value< br >';<br>
                echo "doesn't < br >";
            </p>
            <p>What this looks like in the Browser:</p>
            <h1 class='browser'>String Functions</h1>
            <p class='browser'>This sends data to the browser<br>
                doesn't return a value<br>
                doesn't
            </p>
            <p>Echo is a language construct in php and sends data to the browser.<br> 
                Non string values are converted to string.<br>
                Single quotations are more efficient than double quotations.
            </p>
                       
            <h2>trim</h2>
            <p>
                $extra = "    excess spaces    ";<br>
                echo trim($extra);<br>
            </p>
            <p>This will omit the extra spaces, tabs or returns in front of or at the end of the string.<br>
                ltrim cuts the extra space to the left of the string.<br>
                rtrim cuts the extra space to the right of the string.
            </p>
            
            <h2>printf</h2>
            <p>
                $presentation = 'string functions';<br>
                $amount = 50;<br>
                printf('Outputs formatted string like these two variables: %u and %s',$amount, $presentation.'< br >');
            </p>
            <p>What this looks like in the browser:</p>
            <p class="browser">Outputs formated string like these two variables: 50 and string functions</p>
            <p>Printf outputs formatted string</p>
            
            <h2>strtotime</h2>
            <p>
                echo time()."< br >";<br>
                This will look like this in the browser: <strong class="browser">1461812306</strong> (this is a unix number)<br>
                $time = time();<br>
                $date = date('D M Y @ H:i:s', $time)."< br >";<br>
                echo $date;<br>
                This will look like this in the browser: <strong class="browser">Thu Apr 2016 @ 04:58:26</strong><br>
                $datetwo = date('D M Y @ H:i:s', strtotime('+2 months'));<br>
                echo $datetwo;<br>
                This will look like this in the browser: <strong class="browser">Thu June 2016 @ 04:58:26</strong><br>
            </p>
            <p>strtotime works relative to the time. It is a string to time function</p><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fclpiHsJxVU" frameborder="0" allowfullscreen></iframe>
            
        </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/hageycit336/modules/footer.php'; ?>               
            </footer>
        
    </body>
</html>



