<?php
$user = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = '".$user."' ";
$query = mysqli_query($link,$sql);
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true) {
  if(empty($result["std_id"]) || empty($result["room"]) ||empty($result["class"])){ 
    echo "
    <script>
    window.onload = function() {
    Swal.fire({
    title: 'Please fill in your information!',
    text: 'We need you to complete your information such as school, name, prefix.',
    type: 'warning'
    }).then(function() {
      window.location = '../users/member/';
  });
	};
    </script>";
}else{

}
}else{
  echo "<script>window.location = '../system_login/';</script>";
}
session_write_close();
?>
<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">LOST</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="../">Home</a></li>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) { ?>
                <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#basicModal">แจ้งของหาย</a></li>
                <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#basicModal2">ตามหาของหาย</a></li>
                <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="../users/member/" target="_blank"><span class="pb_rounded-4 px-4"><?php echo htmlspecialchars($_SESSION["username"]); ?></span></a></li>
            <?php }else{ ?>
                <li class="nav-item"><a class="nav-link" href="#section-features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-faq">FAQ</a></li>
                <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="<?php if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true) { if($level == "A"){ echo "../users/admin/";}else{ echo "../users/member/";} }else{ echo "../system_login/"; }?>" target="_blank"><span class="pb_rounded-4 px-4">LOGIN</span></a></li>
            <?php }?>
          </ul>
        </div>
      </div>
    </nav>


<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">แจ้งของหาย</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="text-center" style="color: red;">โปรดเลือกประเภท</h4>
                <center>
                  <a type="button" style="color: white;" class="btn btn-primary" href="../report/?page=report">ประกาศตามหาของหาย</a>
                  <a type="button" style="color: white;" class="btn btn-primary" href="../report/?page=anouce">ประกาศตามเจอของหาย</a> 
              </center>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">ตามหาของหาย</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="text-center" style="color: red;">โปรดเลือกประเภท</h4>
                <center>
                  <a type="button" style="color: white;" class="btn btn-primary" href="?page=report">ตามหาของหาย</a>
                  <a type="button" style="color: white;" class="btn btn-primary" href="?page=anouce">ของหายที่กำลังค้นหา</a> 
              </center>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>




