<?php
    include("../config/database.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        $return_arr = array();

        $inputUsernameEmail = mysqli_real_escape_string($db,$_POST['inputUsernameEmail']);
        $inputPassword = mysqli_real_escape_string($db,$_POST['inputPassword']); 
        $sql = "SELECT * FROM users WHERE (username = '$inputUsernameEmail' OR email = '$inputUsernameEmail') and password = '$inputPassword'";
        $sql_result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($sql_result,MYSQLI_ASSOC)){
            $return_id = $row['id'];
            $return_username = $row['username'];
            $return_name = $row['name'];
            $return_email = $row['email'];
            $return_password = $row['password'];
        
            $return_arr[] = array(
                                "id" => $return_id,
                                "username" => $return_username,
                                "name" => $return_name,
                                "email" => $return_email,
                                "password" => $return_password
                            );
            $_SESSION['users_id'] = $return_id;
            $_SESSION['users_fullname'] = $return_name;
            
        }
        
        if(mysqli_num_rows($sql_result)>0)
		{
			echo json_encode(
                [   
                    "statusCode"=>200,
                    "message"=>"Welcome, you shall be redirected to your dashboard.",
                    json_encode($return_arr),
                ]
            );
		}
		else{
            echo json_encode(
                [   
                    "statusCode"=>201,
                    "message"=>"Sorry, you entered an invalid credentials. Please try again.",
                ]
            );
		}
		mysqli_close($db);
    }
?>