<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
$query1 = "SELECT topic_find.username, topic_find.tname ,topic_find.catagory ,topic_find.school,topic_find.whither ,topic_find.details
,topic_find.img, users.name,users.username, users.lastname,topic_find.uploaded_on,topic_find.status,topic_find.ID
FROM topic_find
INNER JOIN users ON topic_find.username=users.username WHERE topic_find.status = 0 ORDER BY topic_find.uploaded_on ASC" 
or die("Error:" . mysqli_error()); 

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result1 = mysqli_query($link, $query1); 
session_write_close();

?>
<style type="text/css">
div.img-resize img {
  height: 253px;
  width: auto;
}

div.img-resize {
  width: 253px;
  height: 253px;
  overflow: hidden;
  text-align: center;
}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <?php while($row = mysqli_fetch_array($result1)) { ?>
        <div class="col-md-3">
          <div class="card mb-3 shadow-sm">
            <div class="img-resize">
            <img id="myImg" class="myImg" name="myImg" src="../uploads/<?php if(isset($row['img'])) { echo $row['img']; }else{ echo "No_image_available.png";  } ?>"class="card-img-top">
          </div>
            <div class="card-body">
              <div class="card-text">
                <span id="n1">Name : <?php echo $row['tname']; ?></span>
              </div>
            <div class="card-text">
                <span id="n1">Category : <?php echo $row['catagory']; ?></span>
              </div>
              <div class="card-text">
                <span id="n1">School : <?php echo $row['school']; ?></span>
              </div>
              <div class="card-text">
                <span id="n1">Where : <?php echo $row['whither']; ?></span>
              </div>
              <div class="card-text">
                <span id="n1">Detail : <?php echo $row['details']; ?></span>
              </div>
              <br>
              <p class="card-text">Finder : <?php echo $row['name']; echo " "; echo $row['lastname']; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a type="button" id="btnUpdate" name="btnUpdate" style="color: white;" href="system/update_status.php?ID=<?php echo $row['ID']; ?>" class="btn btn-sm btn-success">Select</a>
                </div>
                <input type="hidden" name="ID" id="ID" value="<?php echo $row['ID']; ?>">
                <?php
                // Declare and define two dates 
                //$t = $row['uploaded_on'];
                //$date1 = strtotime($t);  
               // $date2 = strtotime("now");  

                //$diff = abs($date2 - $date1);  

                //$years = floor($diff / (365*60*60*24));  

               // $months = floor(($diff - $years * 365*60*60*24) 
                                             //  / (30*60*60*24));  

                //$days = floor(($diff - $years * 365*60*60*24 -  
                            // $months*30*60*60*24)/ (60*60*24)); 

               // $hours = floor(($diff - $years * 365*60*60*24  
                     //  - $months*30*60*60*24 - $days*60*60*24) 
                                                 //  / (60*60));  

                //$minutes = floor(($diff - $years * 365*60*60*24  
                       //  - $months*30*60*60*24 - $days*60*60*24  
                                      //    - $hours*60*60)/ 60);  
                ?>
                <small class="text-muted text-center">
                <?php echo $row['uploaded_on']; ?>
                </small>
              </div>
            </div>
          </div>
        </div>
        <? } ?>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    /*
    $(document).ready(function() {
      var ID = $('#btnUpdate').data('href');
      $("#btnUpdate").click(function() {
      
          $.ajax({
             type: "POST",
             url: "system/update_status.php",
             data: {ID:ID} ,
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

<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">
</div>

<script>
  var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
} 
</script>