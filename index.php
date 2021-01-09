<?php
session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My first Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <a href="logout.php">Logout</a>
        <h1>This is the index page.</h1>
        <br>
        <p>Hello, username!</p>
    </body>
</html>