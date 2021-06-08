<?php  

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// echo $_SESSION["mall_email"];
    if (isset($_SESSION["mall_email"]) || (isset($_COOKIE["mall_email"]) && isset($_COOKIE["mall_email"])))
    {   
          include "header.php";
  
          include "database.php";


          if (isset($_POST['submit'])) {

            // -----------------------------------------------video -----------------------------------------------------
            $videotarget = "../assets/images/video/".basename($_FILES['video']['name']);
            $video = $_FILES['video']['name'];
            $videodetail = "INSERT INTO `landingvideo` (`videoName`) VALUES ('$video')";
            mysqli_query($connect, $videodetail);
            if (move_uploaded_file($_FILES['video']['tmp_name'], $videotarget)) {
              $msg = "video uploaded successfully";
              echo "<script>console.log('$msg');</script>";
            }
            else{
              $msg = "Failed to upload video";
              echo "<script>console.log('$msg');</script>";
            }
            // -----------------------------------------------end video-----------------------------------------------------
          }  
            // -----------------------------------------------add user -----------------------------------------------------
            if (isset($_POST['ADD'])) {
              if ($_POST['password_add'] == $_POST['confirm_password']) {
                $fetchId = mysqli_query($connect,"SELECT `user_id` FROM `login_details`")or die(mysqli_error($connect));
                $row = mysqli_fetch_array($fetchId);
                $service_id = $row[0]+1;
                
                mysqli_query($connect, "INSERT INTO `login_details` (`user_email`,`user_password`,`user_id`) VALUES ('".$_POST['email_add']."','".$_POST['password_add']."',$service_id)");
              }
          }  

            // -----------------------------------------------end add user-----------------------------------------------------
?>

<main id="main">


  <section class="admin-inner-page  serviceSection-bg" >
    <div class="container-fluid  position-relative formWidth"  data-aos="fade-up" data-aos-delay="100">
      <div class="form">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>ADD LANDING VIDEO</h1>
          </div>
        </div>

        <div class="contact ">
          <!-- ======= Contact Section ======= -->
          <div class="container" data-aos="fade-up">

            <div class="row mt-5">
                <form method="POST" action="" enctype="multipart/form-data" class=" php-email-form">
                    
                  <div class="form-group justify-content-center file">              
                    <label for="file">Add video for landing page</label>
                    <input type="file" class="form-control" id="video" name="video"  >
                  </div>

                  <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="submit" name="submit" />
                  </div>
                </form>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  

  <section class="admin-inner-page  serviceSection-bg" >
    <div class="container-fluid  position-relative formWidth"  data-aos="fade-up" data-aos-delay="100">
      <div class="form">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>ADD USER</h1>
          </div>
        </div>

        <div class="contact ">
          <!-- ======= Contact Section ======= -->
          <div class="container" data-aos="fade-up">

            <div class="row mt-5">
                <form method="POST" action="" enctype="multipart/form-data" class=" php-email-form">
                    
                <div class="form-row">
                    <div class="col-md-12 mb-3 form-group">
                      <label for="email_add">Email</label>
                      <input type="text" class="form-control" name="email_add" id="email_add" >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="password_add">Password </label>
                      <input type="password" class="form-control" name="password_add" id="password_add" >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="confirm_password">Confirm password</label>
                      <input type="password" class="form-control" name="confirm_password" id="confirm_password" >
                    </div>
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="ADD" name="ADD" />
                  </div>
                </form>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  


</main>
<?php
include "footer.php";
}
else{
  header ("Location:loginform.php");
}
?>
