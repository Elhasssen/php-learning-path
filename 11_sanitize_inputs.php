<?php

// when  there is inputs to be diplayed on the site, an attck using a script may 
// get executed since we are using the echo function 
// and to protect against that using htmlsepcchars
// it will beshow on the screen but can not be executed 
if (isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    // or we can use a diffrent function such as filter_inputs
    // This function is used to validate variables from insecure sources, such as user input.
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}


?>

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