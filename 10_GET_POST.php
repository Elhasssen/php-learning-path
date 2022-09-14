<?php
// $_GET and $_POST superglobals 

// We can pass data through urls and forms, using $_GET
// and $_POST superglobals 
echo $_GET['name'];
echo $_GET['age'];
// we can pass variables or data throuhg a url 


?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=elhou&age=18">click</a>
