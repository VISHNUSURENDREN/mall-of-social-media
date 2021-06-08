<?php
  include "database.php";
  include "header.php";
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Business</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
    
  
  <section class="inner-page services section-bg" id="hero">
    <div class="container-fluid position-relative"  data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
        <div id="typed3">
          <span class="text" data-wait="2000" data-words='["BUSINESS"]'></span>
        </div>
          <h2>We are team  of talented designers</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="" class="btn-get-started scrollto">Contact us</a>
      </div>

  
      <div class="row icon-boxes justify-content-center">

      <?php
      $index=0;
   $fetchService = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='business'")or die(mysqli_error($connect));
   while($service = mysqli_fetch_array($fetchService)){

      $fetchImage = mysqli_query($connect,"SELECT `image_name` FROM `service_images` WHERE `main_id`=1 and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
      while($image = mysqli_fetch_array($fetchImage))
      {
        
        ?>
   
   
   
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-2 mb-lg-0 noMargin" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box  index flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="assets/images/services/<?php echo $image['image_name']?>" class="img-fluid hide" alt="<?php echo $service['mainheader']?>">
              </div>
              <div class="flip-box-back">
                <h4 class="title"><a href=""><?php echo $service['mainheader']?></a></h4>
                <p class="description"><?php echo $service['secondsmall']?></p>
                <a  href="" onclick="openHere(this,<?php echo $index?>,'business-service.php?service=<?php echo $service['mainheader']?>& id=<?php echo $service['service_id']?>'); return false;" title="more information"><i class="bx bx-plus"></i></a>
                <a href="contact.php" title="Contact the best story boards services"><i class="bx bx-phone"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        $index++;
      }
        ?>

      </div>
    </div>
  </section>  
</main>

<script>





// var FunctionOne = function () {
//   var
//     a = $.Deferred(),
//     b = $.Deferred();

//   // some fake asyc task
//   setTimeout(function () {
//     console.log('a done');
//     a.resolve();
//   }, Math.random() * 4000);

//   // some other fake asyc task
//   setTimeout(function () {
//     console.log('b done');
//     b.resolve();
//   }, Math.random() * 4000);
//   // FuntionTwo();
//   return $.Deferred(function (def) {
//     $.when(a, b).done(function () {
//       def.resolve();
//     });
//   });
//   FunctionOne().done(FunctionTwo);
// };

// var FunctionTwo = function () {
//   console.log('FunctionTwo');
// };

// FunctionOne().done(FunctionTwo);
</script>


<?php

  include "footer.php";
?>
