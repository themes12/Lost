<?php
header('Content-Type: application/json');
@include('../system/login.php'); 
@require_once "../../database/config.php";
@$user = $_SESSION["username"];
@$school = $_POST["school"];
@$student = $_POST["student"];
@$member_lname = $_POST["firstname"];
@$username = $_POST["lastname"];
@$room = $_POST["room"];	
@$class = $_POST["class"];
    
@$sql = "UPDATE users SET  
school='$school' ,
std_id='$student' , 
name='$member_lname' ,
lastname='$username' ,
room='$room'  ,
class ='$class'
WHERE username='$user' ";

@$query = mysqli_query($link,$sql);
if($query) {
    echo json_encode(array('status' => '1','message'=> 'Successful, update your Profile'));
}
else
{
    echo json_encode(array('status' => '0','message'=> 'Error, please try again later'));
}
mysqli_close($link);
?>