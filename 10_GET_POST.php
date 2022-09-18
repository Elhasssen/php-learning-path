<?php
// $_GET and $_POST superglobals 

// We can pass data through urls and forms, using $_GET
// and $_POST superglobals 

// in order to hide those errros we use a conditon 
if (isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

// we can pass variables or data throuhg a url 

// passing a query string ?name=elhou&age=18
?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=elhou&age=18">click</a>

<!-- creating a from  -->
<!-- we can add an attriute GET to method -->
<!-- GET an be used for URLs and forms -->
<!-- GET is not secure because it displays data
GET can be sued when doing a researhc,
but it is better to use POST method when 
send data to a server  -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>