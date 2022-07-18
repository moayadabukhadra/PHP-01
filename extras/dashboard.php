<?php
session_start();

if(isset($_SESSION['username'])){
    echo '<h1> Wlcome' . $_SESSION['username'] . '</h1>';
    echo '<a href = "Logout.php"> LogOut </a>';
}
else{
    echo '<h1> Welcome Guest </h1>';
    echo '<a href = "/sessions.php"> Login </a>';
}


?>
