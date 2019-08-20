<?php

include('system/login.php');
@$login = $_SESSION["loggedin"];
if(isset($login) || $login == true) {
  if($level == "A"){
    header("location: ../users/admin/index.php");
  }else{
    header("location: ../users/member/index.php");
  }
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Lost &mdash; Earn money</title>
		<meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
		<meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

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

	<section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <form class="bg-white rounded pb_form_v1 <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <h2 class="mb-4 mt-0 text-center">Sign In</h2>
              <div class="form-group" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>>
                <input type="text" name="username" class="form-control pb_height-50 reverse" placeholder="Username" value="<?php echo $username; ?>">
                <span class="focus-input100"><?php echo $username_err; ?></span>
              </div>
              <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" class="form-control pb_height-50 reverse" name="password" placeholder="Password" value="<?php echo $password; ?>">
				<span class="focus-input100"><?php echo $password_err; ?></span>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Login">
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
	<footer class="pb_footer bg-light" role="contentinfo">
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

    <script src="../assets/js/jquery.min.js"></script>

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>

    <script src="../assets/js/main.js"></script>
	</body>
</html>