<?php
    include("../config/database.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = mysqli_real_escape_string($db,$_POST['id']);
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "UPDATE users SET name='$name', email='$email', username='$username', password='$password' WHERE id=$id";
        $sql_result = mysqli_query($db,$sql);
        // echo $sql;
        if($sql_result){
            echo 1;
        }else{
            echo 0;
        }

        mysqli_close($db);
    }

?>