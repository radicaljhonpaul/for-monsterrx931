<?php
include_once './config/database.php';

header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$id = '';
$name = '';
$email = '';
$username = '';
$password = '';
$conn = null;

$databaseService = new DatabaseService();
$conn = $databaseService->getConnection();

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$name = $data->name;
$email = $data->email;
$username = $data->username;
$password = $data->password;

$table_name = 'users';

$query = "UPDATE " . $table_name . "
                SET name = :name,
                    email = :email,
                    username = :username,
                    password = :password WHERE id = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':id', $id);

if($stmt->execute()){

    http_response_code(200);
    echo json_encode(array("message" => "User was successfully updated."));
}
else{
    http_response_code(400);

    echo json_encode(array("message" => "Unable to update the user."));
}
?>