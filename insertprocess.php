<?php
session_start();
require_once('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(isset($name) && isset($email) && isset($mobile)) 
{
  if(isset($subject) && isset($message)){
    $flag = create($name,$email,$mobile,$subject,$message);

    if($flag)
        // $_SESSION['msg'] = "<h1 style='color:white;background-color:green;'><b> added successfully</b></h1>";
        $_SESSION['msg'] = "<div style='padding:20px;background-color:green;color:white;'> <strong>added Successfully</strong> </div>";
    else
        $_SESSION['msg'] = "<div style='padding:20px;background-color:red;color:white;'> <strong>Alert! unable to connect</strong> </div>";
  }
    
}
header('Location:index.php');   

?>

