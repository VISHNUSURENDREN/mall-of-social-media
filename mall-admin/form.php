<?php
include "database.php";
$service = $_GET["x"];



$getdetail = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `mainheader` = '$service'")or die(mysqli_error($connect));

while ($detail = mysqli_fetch_array($getdetail)) { 
        $_SESSION["id"] = $detail["service_id"];
?>
<br>

<style>
  .vertical{
    box-sizing: border-box;
    margin: auto auto;
    display: flex;
    justify-content: center;
    align-items: center;
    
  }
  .hr{
    border: 1px;
    width: 100%;
    border-top: 1px solid black;
  }
</style>
<hr class="hr">

              <form method="POST" action="" enctype="multipart/form-data" class=" php-email-form">
                <div class="form-row">
                  <div class="col-md-12 form-group row">
                    
                    <div class=" col-md-4 col-sm-12">
                      <label for="">PNG Image</label>   
                      <img src="../assets/images/services/png/<?php echo $detail['file'];?>" class="img-fluid" alt="">
                    </div>
                    <div class=" col-md-8 col-sm-12 form-group vertical"> 
                      <input type="file" class="form-control" id="image0" name="image0"  >
                    </div>
                  </div>
                  <hr class="hr">
                  <?php
                  $id = $detail['service_id'];
                  $p = 0;
                  $getphotos = mysqli_query($connect,"SELECT * FROM `service_images` WHERE `service_id` = $id")or die(mysqli_error($connect));
                  while($photos = mysqli_fetch_array($getphotos)){
                    $p++;
                  ?>
                    <div class="col-md-12 form-group row">
                      <div class="col-md-4 col-sm-12">
                        <label for="">Image <?php echo $p;?></label>         
                        <img src="../assets/images/services/<?php echo $photos['image_name'];?>" class="img-fluid" alt="">
                      </div>
                      <div class="col-md-8 col-sm-12 form-group vertical"> 
                        <input type="file" class="form-control" id="image<?php echo $p;?>" name="image<?php echo $p;?>"  >
                      </div>
                    </div>
                    <hr class="hr">
                  <?php
                  }
                  ?>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3 form-group">
                    <label for="mainheader">Main Header </label>
                    <input type="text" class="form-control" name="mainheader" id="mainheader" value="<?php echo $detail['mainheader'];?>">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="secondsmall">Second small sentence </label>
                    <input type="text" class="form-control" name="secondsmall" id="secondsmall" value="<?php echo $detail['secondsmall'];?>">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="whatheader">What is this service? </label>
                    <textarea type="text" class="form-control" name="whatheader" id="whatheader" row="5" ><?php echo $detail['whatheader'];?></textarea>
                  </div>
                </div>
                <hr class="hr">
                <hr class="hr">
                <div class="form-row">
                  <div class="col-md-12 mb-3 form-group">
                    <label for="whyheader">Write the question for why the service...</label>
                    <input type="text" class="form-control" name="whyheader" id="whyheader" value="<?php echo $detail['whyheader'];?>" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="whypara">Write a paragraph about the service</label>
                    <textarea type="text" class="form-control" name="whypara" id="whypara" row="5"><?php echo $detail['whypara'];?></textarea>
                  </div>
                </div>
                <?php
                $id= $detail["service_id"];
                $index=0;
                $getpoints = mysqli_query($connect,"SELECT * FROM `service_points` WHERE (`service_id` = $id) and (`which_category`= 'whatService')")or die(mysqli_error($connect));
                while ($points = mysqli_fetch_array($getpoints)) { 
                    
                ?>
                    <div class="form-row">
                        <label for="boldval<?php echo $index;?>"> <?php echo $index+1;?>) Bold Header </label>
                        <div class="col-md-12 mb-3 form-group border">
                            <input type="text" class="form-control" placeholder="Bold header" name="boldval<?php echo $index;?>" id="boldval<?php echo $index;?> " value="<?php echo $points['bold_header'];?>" >
                            <textarea type="text" class="form-control" placeholder="line" name="point<?php echo $index;?>" id="point<?php echo $index;?>" row="8"><?php echo $points['points'];?></textarea>
                        </div>
                    </div>
                <?php
                $index++;
                }   
                ?>
              <hr class="hr">
              <hr class="hr">
                <div class="form-row">
                  <div class="col-md-12 mb-3 form-group">
                    <label for="whychoose">Write the question for why should the choose us ...</label>
                    <input type="text" class="form-control" name="whychoose" id="whychoose" value="<?php echo $detail['whychoose'];?>">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="choosepara">Write a paragraph </label>
                    <textarea type="text" class="form-control" name="choosepara" id="choosepara" row="5"><?php echo $detail['choosepara'];?></textarea>
                  </div>
                </div>
                <?php
                $idwhy= $detail["service_id"];
                $index=0;
                $getpoints = mysqli_query($connect,"SELECT * FROM `service_points` WHERE (`service_id` = $idwhy) and (`which_category`= 'whychoose')")or die(mysqli_error($connect));
                while ($points = mysqli_fetch_array($getpoints)) { 
                    
                ?>
                    <div class="form-row">
                        <label for="boldvalchoose<?php echo $index;?>"> <?php echo $index+1;?>) Bold Header </label>
                        <div class="col-md-12 mb-3 form-group border">
                            <input type="text" class="form-control" placeholder="Bold header" name="boldvalchoose<?php echo $index;?>" id="boldvalchoose<?php echo $index;?> " value="<?php echo $points['bold_header'];?>" >
                            <textarea type="text" class="form-control" placeholder="line" name="pointchoose<?php echo $index;?>" id="pointchoose<?php echo $index;?>" row="8"><?php echo $points['points'];?></textarea>
                        </div>
                    </div>
                <?php
                $index++;
                }   
                ?>

                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="submit" name="submit" />
                </div>
              </form>
  

<?php
}
?>