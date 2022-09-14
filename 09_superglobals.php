<?php
// superglobals 

// built in variables that are always available in all scopes 
// they all going to be array

// $_GET - contains information about variables passed 
// through a URL or a form
// $_POST - contains information aboiut variables passed through a form
// $_COOKIE - contains information about variables passed 
// through a cookie 
// $_SESSION - contains informations about varibales passed 
// through a session.
// $_SERVER - contains informations about the server envirnments
// $_ ENV - contains information about the invirnemnt variables
// $_FILES - contains information about the files uploaded 
// to the script 
// $_REQUEST - contains information about the variables ^passed 
// through a form or URL   

 

// var_dump($_SERVER);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
</body>
</html>