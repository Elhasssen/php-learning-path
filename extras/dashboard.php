<?php
session_start();

if (isset($_SESSION['username'])){
    echo "welcome " . $_SESSION['username'];
    echo '<a href="logout.php">Logout</a>';
} else {
    echo 'guest';
    echo '<a href="13_sessions.php">Home</a>';
}


?> 