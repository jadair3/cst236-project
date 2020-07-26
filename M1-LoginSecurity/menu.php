<?php 
session_start();
/*
    CST-236 
    Module - Login Page v1.0
    Jackie Adair
    26 July 2020
 */
?>
<!DOCTYPE html>
<!--
    CST-236
    Jackie Adair
    14 April 2019
    HTML for the index page for this blog.
-->

    <html>
        <head>
            <title>Success</title>
            <link rel="stylesheet" type="text/css" href="style/site.css">
        </head>
        <body>
            <h1>Access Granted to <?php echo $_SESSION["USERNAME"];?>!!!</h1>
    
        </body>
    </html>

