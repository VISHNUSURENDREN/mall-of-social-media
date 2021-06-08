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
    $division = $_POST["division"];
    $getval = mysqli_query($connect,"SELECT  `service_id` FROM `service_details` WHERE `division` = '$division'")or die(mysqli_error($connect));
    $value = mysqli_fetch_array($getval);
    $val =$value['service_id'];
    mysqli_query($connect,"DELETE FROM `service_details` WHERE `service_id` = $val")or die(mysqli_error($connect));
    mysqli_query($connect,"DELETE FROM `service_images` WHERE `service_id` = $val")or die(mysqli_error($connect));
    mysqli_query($connect,"DELETE FROM `service_points` WHERE `service_id` = $val")or die(mysqli_error($connect));
  }
?>


<main id="main">

<section class="admin-inner-page  serviceSection-bg" >
    <div class="container-fluid  position-relative formWidth"  data-aos="fade-up" data-aos-delay="100">
      <div class="form">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>DELETE SERVICE</h1>
          </div>
        </div>
        <style>
            .fullWidth{
                width:100%;
            }
        </style>
        <div class="contact ">
          <div class="container" data-aos="fade-up">
            <div class="row mt-5">
              <form method="POST" action="" enctype="multipart/form-data" class=" php-email-form">
                <div class="col-12 form-group">
                    <label for="division">Choose the service:</label>
                    <select class="form-control fullWidth" name="division" id="division">
                        <option value="choose">choose...</option>
                        <?php
                        $fetch = mysqli_query($connect,"SELECT `mainheader` FROM `service_details`")or die(mysqli_error($connect));
                        while($row = mysqli_fetch_array($fetch)){ 
                        ?>
                            <option value="<?php echo $row["mainheader"];?>"><?php echo $row["mainheader"];?></option>
                        <?php
                        }
                        ?>
                    </select>
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


</main>
<?php
include "footer.php";
}
else{
  header ("Location:loginform.php");
}
?>
