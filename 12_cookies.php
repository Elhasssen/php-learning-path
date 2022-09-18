<?php

// cookies 
// Cookies are mechnics to store data, not sensetive data ofcourse, putting the d
// data in the remote broser to track the user once they visit the website again
// you can set sepcefid date to be stored in the browser, and then retrreive it 
// when the user visits the site again 


// set cookie 
setcookie('name','Brad',time() + 86400 *30);
// time + a day in seconds multipleis by 30 which is 30 days

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// we can eat the cookie 

setcookie('name', '',time() + 86400);






?>