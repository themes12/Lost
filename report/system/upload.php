<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
@require_once "../../database/config.php";
@$name = $_POST["name"];
@$catagory = $_POST["catagory"];
@$school = $_POST["school"];
@$whither = $_POST["whither"];
@$details = $_POST["details"];   
@$user = $_SESSION['username'];

    @$target_dir = "../../uploads/";
    @$allow_types = array('jpg','png','jpeg','gif');
    
    @$images_arr = array();
    foreach($_FILES['images']['name'] as $key=>$val){
        @$image_name = $_FILES['images']['name'][$key];
        @$tmp_name   = $_FILES['images']['tmp_name'][$key];
        @$size       = $_FILES['images']['size'][$key];
        @$type       = $_FILES['images']['type'][$key];
        @$error      = $_FILES['images']['error'][$key];
        
        
        @$file_name = basename($_FILES['images']['name'][$key]);
        @$new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '_' . $file_name;
        @$targetFilePath = $target_dir . $new_image_name;
        
        @$file_type = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($file_type, $allow_types)){    
            
            if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath)){
                $images_arr[] = $targetFilePath;
                @$sql = "INSERT INTO topic_report (username,tname,catagory,school,whither,details,img) VALUES ('$user','$name','$catagory','$school','$whither','$details','$targetFilePath')";
                if (mysqli_query($link, $sql)) {
                    echo "<script>window.location.href = '../../redirect/';</script>";
                } else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
            }
        }
    }
?>
