<?php
    include("../config/database.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $current_user_id = $_SESSION['users_id'];
        $return_arr = array();

        $sql = "SELECT * FROM users WHERE id <> '$current_user_id' ORDER BY id ASC";
        $sql_result = mysqli_query($db,$sql);

        if(mysqli_num_rows($sql_result)>0){
            $row= mysqli_fetch_all($sql_result, MYSQLI_ASSOC);
            // return $row;  
            echo json_encode($row);
                
          }else{
            return $row=[];
          }

        mysqli_close($db);
    }
?>