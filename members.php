<?php
session_start();
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joot fitness|members</title>
    <link rel="stylesheet" href="style_memberpage.css">
    
<body>
 <div class="center">
    <h1>Sign up</h1>
    <form action="signup.php" method="post">
        <div class="txt_field">
            <label for="Username">Username</label>
            <input type="text" name="Username" required>
        </div>
        <div class="txt_field">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="txt_field">
            <label for="Confirm Password">Confirm Password</label>
            <input type="password" name="c_password" required>
        </div>
        <div class="txt_field">
            <label for="email">E-mail</label>
            <input type="Email" name="email" required>
        </div>
        <div class="radiobutton">
            <span>
                <input type="radio" value="5 times" name="times">
                5 times
            </span>
            <span>
                <input type="radio" value="7 times" name="times">
                7 times
            </span>
            <span>
                <input type="radio" value="5 times" name="times">
                10 times
            </span>
        </div>
        
        <div class="checkbox">
            <span>
                <input type="checkbox" value="Boxing" name="Course">
                Boxing
            </span>
            <span>
                <input type="checkbox" value="Yoga" name="Course">
                Yoga
            </span>
            <span>
                <input type="checkbox" value="Fittness" name="Course">
                Fittness
            </span>
        </div>
    
        <input type="Submit" name="Submit">
        </form>    
    </div>
    
</body>
</html>
