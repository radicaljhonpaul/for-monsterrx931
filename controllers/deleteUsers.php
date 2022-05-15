<?php
    include("../config/database.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $sql = "DELETE FROM users WHERE email = '$email'";
        $sql_result = mysqli_query($db,$sql);

        if($sql_result){
            echo 1;
          }else{
            echo 0;
          }

        mysqli_close($db);
    }

?>