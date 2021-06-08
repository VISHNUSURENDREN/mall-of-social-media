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
    $mainheader = $_POST["mainheader"];
    $secondsmall = $_POST["secondsmall"];
    $whatheader = $_POST["whatheader"];
    $whyheader = $_POST["whyheader"];
    $whypara = $_POST["whypara"];
    $whychoose = $_POST["whychoose"];
    $choosepara = $_POST["choosepara"];
    $id= $_SESSION['id'];   
  
    $getpng = mysqli_query($connect,"SELECT  `file` FROM `service_details` WHERE `service_id` = '$id'")or die(mysqli_error($connect));
    $png = mysqli_fetch_array($getpng); 

    if($_FILES['image0']['name'] != ""){
      $imagetarget = "../assets/images/services/png/".basename($_FILES['image0']['name']);
      $image = $_FILES['image0']['name'];
      mysqli_query($connect,"UPDATE `service_details` SET `file`= '$image' WHERE (`service_id`=$id)")or die(mysqli_error($connect));
      if (move_uploaded_file($_FILES['image0']['tmp_name'], $imagetarget)) {
        if (!unlink("../assets/images/services/png/".$png["file"])) { 
            echo ("cannot be deleted due to an error"); 
        } 
        else { 
            echo ("Image been deleted"); 
        } 
      }
      else{
        $msg = "Failed to upload image";
        echo "<script>console.log('$msg');</script>";
      }
    }
    $index=0;
    $getposter = mysqli_query($connect,"SELECT * FROM `service_images` WHERE `service_id` = '$id'")or die(mysqli_error($connect));
    while($poster = mysqli_fetch_array($getposter)){
      $index++;
      if($_FILES['image'.$index]['name'] != ""){
        $imagetarget = "../assets/images/services/".basename($_FILES['image'.$index]['name']);
        $image = $_FILES['image'.$index]['name'];
        mysqli_query($connect,"UPDATE `service_images` SET `image_name`= '$image' WHERE (`service_id`=$id and `main_id`= $index)")or die(mysqli_error($connect));
        if (move_uploaded_file($_FILES['image'.$index]['tmp_name'], $imagetarget)) {
          if (!unlink("../assets/images/services/".$poster['image_name'])) { 
              echo ("cannot be deleted due to an error"); 
          } 
          else { 
              echo ("Image been deleted"); 
          } 
        }
        else{
          $msg = "Failed to upload image";
          echo "<script>console.log('$msg');</script>";
        }
      }
    }   



  mysqli_query($connect,"UPDATE `service_details` SET `mainheader`='".$mainheader."',
                                  `secondsmall`='".$secondsmall."',
                                  `whatheader`='".$whatheader."',
                                  `whyheader`='".$whyheader."',
                                  `whypara`='".$whypara."',
                                  `whychoose`='".$whychoose."',
                                  `choosepara`='".$choosepara."'
                                   WHERE `service_id` = $id")or die(mysqli_error($connect));
    
    
    $fetchwhy = mysqli_query($connect,"SELECT count(`which_category`) FROM `service_points` WHERE (`service_id`=$id) and (`which_category`= 'whatService')")or die(mysqli_error($connect));
    $val = mysqli_fetch_array($fetchwhy);
    $value1 = $val['0'];
    
    for ($i=0; $i < $value1; $i++) { 
      $bold = $_POST["boldval".$i];
      mysqli_query($connect,"UPDATE `service_points` SET `bold_header`= '$bold' WHERE (`service_id`=$id) and (`main_id`= $i) and (`which_category`= 'whatService')")or die(mysqli_error($connect));
      $pointUpdate = $_POST["point".$i];
      mysqli_query($connect,"UPDATE `service_points` SET `points`= '$pointUpdate' WHERE (`service_id`=$id) and (`main_id`= $i) and (`which_category`= 'whatService')")or die(mysqli_error($connect));
    } 
    $fetchchoose = mysqli_query($connect,"SELECT count(`which_category`) FROM `service_points` WHERE (`service_id`=$id) and (`which_category`= 'whatService')")or die(mysqli_error($connect));
    $val = mysqli_fetch_array($fetchchoose);
    $value2 = $val['0'];
    
    for ($i=0; $i < $value2; $i++) { 
      $bold = $_POST["boldvalchoose".$i];
      mysqli_query($connect,"UPDATE `service_points` SET `bold_header`= '$bold' WHERE (`service_id`=$id) and (`main_id`= $i) and (`which_category`= 'whychoose')")or die(mysqli_error($connect));
      $pointUpdate = $_POST["pointchoose".$i];
      mysqli_query($connect,"UPDATE `service_points` SET `points`= '$pointUpdate' WHERE (`service_id`=$id) and (`main_id`= $i) and (`which_category`= 'whychoose')")or die(mysqli_error($connect));
    } 
  }
    
?>


<main id="main">

<section class="admin-inner-page  serviceSection-bg" >
    <div class="container-fluid  position-relative formWidth"  data-aos="fade-up" data-aos-delay="100">
      <div class="form">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>EDIT SERVICE</h1>
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
                
                <div class="col-12 form-group">
                    <label for="division">Choose the service:</label>
                    <select class="form-control fullWidth" name="division" id="division" onchange="bringform()">
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

                    <div id="here">
                     
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  
<script>
function bringform() {
    var service = document.getElementById("division").value;

    if(division != "choose"){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("here").innerHTML = this.responseText;
            }
            
        };
        xmlhttp.open("GET", "form.php?x="+service, true);
        xmlhttp.send();     
    }                      
}
</script>


</main>
<?php
  include "footer.php";
}
else{
  header ("Location:loginform.php");
}
?>
