<?php
@require_once "../../database/config.php";
@$target = $_GET["ID"];
    
@$sql = "UPDATE topic_find SET  
status= 1
WHERE ID='$target' ";

if (mysqli_query($link, $sql)) {
    echo "<script>window.location.href = '../../redirect/';</script>";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);
?>