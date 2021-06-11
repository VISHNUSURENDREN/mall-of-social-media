<div class="logo-section " id="section2">
        <div class="logo-content service-background">
            <div class="">
                <div class="container " data-aos="fade-up">
                    <div class="row">

                        <div class="col-md-4 cometocenter">
                            <div class="image-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                                <img src="assets/images/services/<?php echo $image1['image_name']?>" class="img-fluid" alt="<?php echo $service["whatheader"]?>">
                            </div>
                        </div>
                        <div class="col-md-8 cometocenter" >
                            <div class="servicecontent">
                                <h3><?php echo $service["whyheader"]?></h3>
                                <h6><?php echo $service["whypara"]?></h6>
                                <?php
                                    $cnt = 1;
                                    while($whatService = mysqli_fetch_array($fetchwhatService)){
                                ?>
                                    <div class="points" id="<?php echo $cnt;?>"   onclick="hovered(this)">
                                        <h5  >
                                            <i class="bx bx-book"></i>&nbsp;
                                            <?php echo $whatService['bold_header'] ?>
                                        </h5>
                                        <p class="point1 hoverme" id="point<?php echo $cnt;?>">
                                            <?php echo $whatService['points'] ?>
                                        </p>
                                    </div>
                                <?php
                                        $cnt+=1;
                                    }
                                ?>
                            </div>
                        </div>





                        <div class="col-md-8 cometocenter" >
                            <div class="servicecontent">
                                <h3><?php echo $service["whychoose"]?></h3>
                                <h6><?php echo $service["choosepara"]?></h6>
                                <?php
                                    $cnt = 111;
                                    while($whychoose = mysqli_fetch_array($fetchwhychoose)){
                                ?>
                                    <div class="points" id="<?php echo $cnt;?>"   onclick="hovered(this)">
                                        <h5  >
                                            <i class="bx bx-book"></i>&nbsp;
                                            <?php echo $whychoose['bold_header'] ?>
                                        </h5>
                                        <p class="point1 hoverme" id="point<?php echo $cnt;?>">
                                           
                                        </p>
                                    </div>
                                <?php
                                        $cnt+=1;
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 cometocenter">
                            <div class="image-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                                <img src="assets/images/services/<?php echo $image2['image_name']?>" class="img-fluid" alt="<?php echo $service["whatheader"]?>">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="servicepageContact">
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="contentcta">
            <div class="text-center">
              <h3>Call To Action</h3>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn call-animation" href="#">CONTACT US</a>
            </div>
          </div>
        </div>
      </section>
    </div>
