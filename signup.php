<?php
    $error = false;
    session_start();
    require_once 'db.php';
    echo "working";
    echo'<br>';
    if (isset($_POST['Submit'])){
        $Username = $_POST['Username'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $email = $_POST['email'];
        $times = $_POST['times'];
        $Course = $_POST['Course'];
        echo"submit working";
        if($password != $c_password){
            echo"Password is not the same.";
            $error = true;
        }
        if(!$error){
           $stmt = $conn->prepare("INSERT INTO members(Username,Password,email,Course,Times)
            VALUES('$Username','$password','$email','$times','$Course')");
            echo"working";
          $stmt->execute();  
          header("location:homepage.php");
        }
    }
?>