<?php 
require_once('dbConfig.php');
$conn =new mysqli(SERVERNAME,USERNAME,PASSWORD,DBNAME);
if($conn->connect_error)
{
    die("connection failed ".$conn->connect_error);
}
function create($name,$email,$mobile,$subject,$message)
{
    global $conn;
    $q = "insert into users(name,email,mobile,subject,message) values('{$name}','{$email}','{$mobile}','{$subject}','{$message}')";
    $result = $conn->query($q);
    if($result)
        return true;
    else
        return false;
}


?>