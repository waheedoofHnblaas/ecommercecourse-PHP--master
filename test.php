<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "wael",
"users_email" => "wael@gmail.com",
"users_phone" => "324234",
"users_password" => "324234",
"users_verifiycode" => "3243243",       
);
$count = insertData($table , $data);

?>