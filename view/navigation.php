<?php
    // require a config.php file in the model folder
    // have access to the variables int the config.php file
    require_once(__DIR__ . "/../model/config.php");
    
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
</head>
<nav>
    <ul>
        <!-- create a link that point to the post file -->
        <div class="hello">
        	<b>
             <p>
        		Welcome! Register or Login!
        	</b>
             </p>
        </div>

        <div class="link">
         <a class="a" href="<?php echo $path. "login.php" ?>">Log In</a>
          <br>  <a class="a" href="<?php echo $path. "register.php" ?>">Register</a> </br> 
         </div>
    </ul>
</nav>