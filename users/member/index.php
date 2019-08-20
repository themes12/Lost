<?php
@include('../system/login.php'); 
@require_once "../../database/config.php";
@$user = $_SESSION["username"];
@$level = $_SESSION["Userlevel"];
$sql = "SELECT * FROM users WHERE username = '".$user."' ";
$query = mysqli_query($link,$sql);
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
// Initialize the session

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
<div class="container">
    <div class="row">
  		<div class="col-sm-10"><h1>Hi! <?php echo htmlspecialchars($_SESSION["username"]); ?></h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->

          <ul class="list-group">
            <li class="list-group-item text-muted"><strong>Console</strong><i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><a href="../../">Home</a></strong></span></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong><a href="../logout.php">Logout</a></strong></span></li>
          </ul> 

          <ul class="list-group">
            <li class="list-group-item text-muted"><strong>Activity</strong><i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Lost</strong></span> 78</li>
          </ul> 

        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
                <li><a data-toggle="tab" href="#messages">Report</a></li>
              </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="school"><h4>School</h4></label>
                              <input type="text" class="form-control" name="school" id="school" value="<?php if(empty($result['school'])){}else{echo $result['school'];}?>" placeholder="Student ID" title="Enter your School."> 
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="student"><h4>Student ID</h4></label>
                              <input type="text" class="form-control" name="student" id="student" placeholder="Student ID" value="<?php if(empty($result['std_id'])){}else{echo $result['std_id'];}?>" title="enter your Student ID.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="firstname"><h4>Firstname</h4></label>
                              <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" value="<?php if(empty($result['name'])){}else{echo $result['name'];}?>" title="enter your Firstname.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="lastname"><h4>Lastname</h4></label>
                              <input type="text" class="form-control" name="lastname" id="lastname" value="<?php if(empty($result['lastname'])){}else{echo $result['lastname'];}?>" placeholder="Lastname" title="enter your Lastname.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="room"><h4>Room</h4></label>
                              <input type="text" class="form-control" name="room" id="room" value="<?php if(empty($result['room'])){}else{echo $result['room'];}?>" placeholder="Room" title="enter your Room.">
                          </div>
                          <div class="col-xs-6">
                            <label for="class"><h4>Class</h4></label>
                              <input type="text" class="form-control" name="class" id="class" value="<?php if(empty($result['class'])){}else{echo $result['class'];}?>" placeholder="Class" title="enter your Class.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<input class="btn btn-lg btn-success" name="btnSend" id="btnSend" value="Save">
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             
             <div class="tab-pane" id="messages">
                              
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          <h2>ของหาย</h2>
                      </div>
                      <div class="form-group">
                        <h2>การแจ้ง</h2>
                      </div>
          
              	</form>
               
             </div><!--/tab-pane-->
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  </body>
                                                      
<script type="text/javascript">
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
<script type="text/javascript">
		$(document).ready(function() {
			
			$("#btnSend").click(function() {
			
					$.ajax({
					   type: "POST",
					   url: "../system/update_profile.php",
					   data: $("#registrationForm").serialize(),
					   success: function(result) {
							if(result.status == 1) // Success
							{
								Swal.fire(
                                    'Good',
                                    (result.message),
                                    'success'
                                    ); 
							}
							else // Err
							{
								Swal.fire(
                                    'Sorry',
                                    (result.message),
                                    'Error'
                                    ); 
							}
					   }
					 });

			});
	
		});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
</body>
</html>
