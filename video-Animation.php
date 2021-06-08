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
          <li>Video & Animation</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page services section-bg" id="hero">
    <div class="container-fluid position-relative"  data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
        <!-- <h1><span class="video">Video</span> <span class="and">&</span> <span class="animation">Animation</span></h1> -->

<h1><svg id="logo" width="600" height="160" viewBox="0 0 919 81" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 6.83998L39.544 61.848L59.992 6.83998H71.416L44.632 75H34.456L7.57599 6.83998H19Z" stroke="#124265" stroke-width="5"/>
<path d="M78.3025 75V6.83998H89.0545V75H78.3025Z" stroke="#124265" stroke-width="5"/>
<path d="M103.019 75V6.83998H127.211C134.571 6.83998 140.683 8.37598 145.547 11.448C150.475 14.456 154.187 18.552 156.683 23.736C159.179 28.856 160.427 34.552 160.427 40.824C160.427 47.736 159.051 53.752 156.299 58.872C153.547 63.992 149.675 67.96 144.683 70.776C139.755 73.592 133.931 75 127.211 75H103.019ZM149.483 40.824C149.483 36.024 148.587 31.8 146.795 28.152C145.067 24.504 142.539 21.624 139.211 19.512C135.947 17.4 131.947 16.344 127.211 16.344H113.771V65.496H127.211C132.011 65.496 136.043 64.408 139.307 62.232C142.635 60.056 145.163 57.112 146.891 53.4C148.619 49.688 149.483 45.496 149.483 40.824Z" stroke="#124265" stroke-width="5"/>
<path d="M217.049 65.496V75H170.297V6.83998H216.185V16.344H181.049V35.736H211.481V44.664H181.049V65.496H217.049Z" stroke="#124265" stroke-width="5"/>
<path d="M253.802 75.48C248.938 75.48 244.49 74.52 240.458 72.6C236.49 70.68 233.066 68.088 230.186 64.824C227.306 61.496 225.066 57.784 223.466 53.688C221.93 49.528 221.162 45.272 221.162 40.92C221.162 36.376 221.994 32.056 223.658 27.96C225.322 23.8 227.626 20.12 230.57 16.92C233.514 13.656 236.97 11.096 240.938 9.23998C244.97 7.31998 249.322 6.35998 253.994 6.35998C258.858 6.35998 263.275 7.35198 267.243 9.33599C271.275 11.32 274.698 13.976 277.514 17.304C280.394 20.632 282.603 24.344 284.139 28.44C285.739 32.536 286.539 36.728 286.539 41.016C286.539 45.56 285.707 49.912 284.043 54.072C282.443 58.168 280.171 61.848 277.227 65.112C274.283 68.312 270.795 70.84 266.763 72.696C262.795 74.552 258.474 75.48 253.802 75.48ZM232.106 40.92C232.106 45.208 233.002 49.272 234.794 53.112C236.586 56.888 239.082 59.96 242.282 62.328C245.546 64.632 249.418 65.784 253.898 65.784C257.29 65.784 260.33 65.08 263.018 63.672C265.706 62.264 267.979 60.376 269.835 58.008C271.691 55.576 273.099 52.888 274.059 49.944C275.019 47 275.499 43.992 275.499 40.92C275.499 36.632 274.603 32.6 272.811 28.824C271.083 25.048 268.587 22.008 265.323 19.704C262.059 17.336 258.25 16.152 253.898 16.152C250.442 16.152 247.37 16.856 244.682 18.264C241.994 19.672 239.722 21.56 237.866 23.928C236.01 26.296 234.57 28.952 233.546 31.896C232.586 34.84 232.106 37.848 232.106 40.92Z" stroke="#124265" stroke-width="5"/>
<path d="M363.437 75L357.293 68.472C354.477 70.84 351.373 72.696 347.981 74.04C344.653 75.32 341.133 75.96 337.421 75.96C333.005 75.96 329.101 75.096 325.709 73.368C322.317 71.576 319.661 69.208 317.741 66.264C315.885 63.32 314.957 60.024 314.957 56.376C314.957 53.432 315.533 50.808 316.685 48.504C317.901 46.136 319.469 44.024 321.389 42.168C323.309 40.248 325.357 38.52 327.533 36.984C324.653 33.72 322.605 30.968 321.389 28.728C320.237 26.488 319.661 24.184 319.661 21.816C319.661 18.68 320.429 15.928 321.965 13.56C323.565 11.192 325.741 9.33598 328.493 7.99199C331.245 6.64798 334.317 5.97598 337.709 5.97598C340.845 5.97598 343.725 6.55198 346.349 7.70398C348.973 8.79198 351.085 10.424 352.685 12.6C354.285 14.776 355.085 17.4 355.085 20.472C355.085 24.248 353.837 27.544 351.341 30.36C348.909 33.112 345.869 35.736 342.221 38.232L357.581 54.264C358.669 52.088 359.501 49.72 360.077 47.16C360.717 44.536 361.037 41.752 361.037 38.808H369.677C369.677 43.096 369.133 47.096 368.045 50.808C367.021 54.456 365.581 57.784 363.725 60.792L377.357 75H363.437ZM329.357 21.528C329.357 22.808 329.773 24.12 330.605 25.464C331.501 26.744 333.261 28.76 335.885 31.512C338.829 29.656 341.133 27.928 342.797 26.328C344.525 24.664 345.389 22.776 345.389 20.664C345.389 18.616 344.653 16.984 343.181 15.768C341.773 14.488 339.949 13.848 337.709 13.848C335.277 13.848 333.261 14.616 331.661 16.152C330.125 17.624 329.357 19.416 329.357 21.528ZM325.133 56.472C325.133 58.712 325.741 60.664 326.957 62.328C328.173 63.992 329.805 65.304 331.853 66.264C333.901 67.16 336.141 67.608 338.573 67.608C340.941 67.608 343.213 67.16 345.389 66.264C347.629 65.368 349.677 64.088 351.533 62.424L333.869 43.704C331.245 45.56 329.133 47.512 327.533 49.56C325.933 51.608 325.133 53.912 325.133 56.472Z" stroke="#124265" stroke-width="5"/>
<path d="M422.871 6.83998H433.047L459.543 75H448.215L441.015 56.472H414.711L407.607 75H396.183L422.871 6.83998ZM438.903 48.504L427.959 18.648L416.631 48.504H438.903Z" stroke="#124265" stroke-width="5"/>
<path d="M477.285 26.808V75H466.533V6.83998H475.365L513.957 56.088V6.93598H524.805V75H515.397L477.285 26.808Z" stroke="#124265" stroke-width="5"/>
<path d="M538.686 75V6.83998H549.438V75H538.686Z" stroke="#124265" stroke-width="5"/>
<path d="M620.714 75V26.424L600.65 63.288H594.314L574.154 26.424V75H563.402V6.83998H574.922L597.482 48.504L620.042 6.83998H631.562V75H620.714Z" stroke="#124265" stroke-width="5"/>
<path d="M665.174 6.83998H675.35L701.846 75H690.518L683.318 56.472H657.014L649.91 75H638.486L665.174 6.83998ZM681.206 48.504L670.262 18.648L658.934 48.504H681.206Z" stroke="#124265" stroke-width="5"/>
<path d="M752.382 16.344H729.726V75H718.878V16.344H696.126V6.83998H752.382V16.344Z" stroke="#124265" stroke-width="5"/>
<path d="M760.083 75V6.83998H770.835V75H760.083Z" stroke="#124265" stroke-width="5"/>
<path d="M813.119 75.48C808.255 75.48 803.807 74.52 799.775 72.6C795.807 70.68 792.383 68.088 789.503 64.824C786.623 61.496 784.383 57.784 782.783 53.688C781.247 49.528 780.479 45.272 780.479 40.92C780.479 36.376 781.311 32.056 782.975 27.96C784.639 23.8 786.943 20.12 789.887 16.92C792.831 13.656 796.287 11.096 800.255 9.23998C804.287 7.31998 808.639 6.35998 813.311 6.35998C818.175 6.35998 822.591 7.35198 826.559 9.33599C830.591 11.32 834.015 13.976 836.831 17.304C839.711 20.632 841.919 24.344 843.455 28.44C845.055 32.536 845.855 36.728 845.855 41.016C845.855 45.56 845.023 49.912 843.359 54.072C841.759 58.168 839.487 61.848 836.543 65.112C833.599 68.312 830.111 70.84 826.079 72.696C822.111 74.552 817.791 75.48 813.119 75.48ZM791.423 40.92C791.423 45.208 792.319 49.272 794.111 53.112C795.903 56.888 798.399 59.96 801.599 62.328C804.863 64.632 808.735 65.784 813.215 65.784C816.607 65.784 819.647 65.08 822.335 63.672C825.023 62.264 827.295 60.376 829.151 58.008C831.007 55.576 832.415 52.888 833.375 49.944C834.335 47 834.815 43.992 834.815 40.92C834.815 36.632 833.919 32.6 832.127 28.824C830.399 25.048 827.903 22.008 824.639 19.704C821.375 17.336 817.567 16.152 813.215 16.152C809.759 16.152 806.687 16.856 803.999 18.264C801.311 19.672 799.039 21.56 797.183 23.928C795.327 26.296 793.887 28.952 792.863 31.896C791.903 34.84 791.423 37.848 791.423 40.92Z" stroke="#124265" stroke-width="5"/>
<path d="M866.298 26.808V75H855.546V6.83998H864.378L902.97 56.088V6.93598H913.818V75H904.41L866.298 26.808Z" stroke="#124265" stroke-width="5"/>
</svg></h1>

<script>
  const logo= document.querySelectorAll("#logo path")
  for (let i = 0; i < logo.length; i++) {
    console.log(`${i} is ${logo[i].getTotalLength()}`);
  }
</script>
          <h2>We are team  of talented designers</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="" class="btn-get-started scrollto">Contact us</a>
      </div>


      <div class="row icon-boxes">
      <?php
      $index=0;
      $fetchService = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='video-animation'")or die(mysqli_error($connect));
      while($service = mysqli_fetch_array($fetchService)){

      $fetchImage = mysqli_query($connect,"SELECT `image_name` FROM `service_images` WHERE `main_id`=1 and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
      while($image = mysqli_fetch_array($fetchImage)){
        
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
                <a  href="" onclick="openHere(this,<?php echo $index?>,'video-animation-service.php?service=<?php echo $service['mainheader']?>& id=<?php echo $service['service_id']?>'); return false;" title="more information"><i class="bx bx-plus"></i></a>
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
<?php
  include "footer.php";
?>
