<?php 
    $id = $_GET["id"];
    include "database.php";
    include "header.php";
    $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `service_id`=$id")or die(mysqli_error($connect));
    $service = mysqli_fetch_array($fetchservice);
    $fetchImage2 = mysqli_query($connect,"SELECT `image_name` FROM `service_images` WHERE `main_id`=2  and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
    $image1 = mysqli_fetch_array($fetchImage2);
    $fetchImage2 = mysqli_query($connect,"SELECT `image_name` FROM `service_images` WHERE `main_id`=3  and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
    $image2 = mysqli_fetch_array($fetchImage2);

    $fetchwhatService = mysqli_query($connect,"SELECT * FROM `service_points` WHERE `which_category`='whatService' and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
    
    $fetchwhychoose = mysqli_query($connect,"SELECT * FROM `service_points` WHERE `which_category`='whychoose' and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
    ?>
<section id="servicesdetails" class="logo-container ">
<canvas id="canvas"></canvas>
    <div class=" container-fluid  position-relative program-header" id="heading" data-aos="fade-up" data-aos-delay="100">
      <div class="row heading">
          <div class="col-xl-7 col-lg-9 logo-title " id="p-title">
              <h1><?php echo $service['mainheader']?></h1>
              <h4><?php echo $service['secondsmall']?></h4>
              <p><?php echo $service['whatheader']?></p>
              <a href="contact.php" class="pbtn logobtn get-started scrollto">Contact us</a> 
          </div>
          <div class=" col-md-4 col-lg-4 logo-img" >
              <img src="assets/images/services/png/<?php echo $service["file"]?>" style="max-width: 100%;height: auto;" alt="<?php echo $service["mainheader"]?>">        
          </div>
      </div>          
    </div>
   

   <?php 
    include "servicecontent.php";
   ?>


    
</section>
<?php 
    include "footer.php";
?>
<SCRIPt>
    headerColor("transparent","white");  
    $(".get-started-btn").css("color","black");

</SCRIPt>
<script>

  
  tick();
</script>