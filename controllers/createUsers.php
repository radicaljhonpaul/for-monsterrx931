<?php
    include("../config/database.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = mysqli_real_escape_string($db,$_POST['name']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "INSERT INTO users (name, email, username, password)
        VALUES ('$name', '$email', '$username', '$password')";
        $sql_result = mysqli_query($db,$sql);

        if($sql_result){
            echo 1;
        }else{
            echo 0;
        }

        mysqli_close($db);
    }

?>