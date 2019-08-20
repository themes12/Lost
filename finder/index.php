<?php
session_start();
@require_once '../database/config.php';
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>add new post</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    .btn {
    text-align: center;
    }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

		<link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/slick-theme.css">

    <link rel="stylesheet" href="../assets/css/helpers.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/landing-2.css">
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">
<?php include('system/navbar.php');?>
<section class="pb_gradient_v1 cover-bg-indigo cover-bg-opacity">
<br>
<br>
<br>
<div class="container">
<div class="row align-items-center justify-content-center">
  <?php if(isset($_GET['page'])){
    if($_GET['page'] == "report"){
      include 'asset/report.php';
    }else if($_GET['page'] == "anouce"){
      include 'asset/anouce.php';
    }else{
      include 'asset/report.php';
    }
  }else{ 
    
  }
  ?>
</div>
</div>

<br>
  </section>
  <br>
<footer class="pb_footer" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; 2019. All Rights Reserved. <br>  <a href="https://uicookies.com/bootstrap-html-templates/">Bootstrap Templates</a> by uiCookies</p>
            <p class="pb_font-14">Demo Images: <a href="https://unsplash.com/" target="_blank" rel="nofollow">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>
<!-- loader -->
<div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>

<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>

<script src="../assets/js/jquery.waypoints.min.js"></script>
<script src="../assets/js/jquery.easing.1.3.js"></script>

<script src="../assets/js/main.js"></script>
<script scr="script.js"></script>

<script type="text/javascript">
  /*
    $(document).ready(function() {
      
      $("#btnSend").click(function() {
      
          $.ajax({
             type: "POST",
             url: "system/upload.php",
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

</body>
</html>

 
