<?php
// Sessions 

/*
Sessions are a way to store information (in variables)
to be used across multiple pages.
Unlike cookies, sessions are stored on the server.
*/
// a cookie is date saved in the client
// a sessions is data saved in the server so it is more
// secure
session_start();
if (isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'hassen' && $password == 'jeff') {
        $_SESSION['username'] = $username;
        header('Location: extras/dashboard.php');
    } else {
        echo 'error';
    }

}


?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
