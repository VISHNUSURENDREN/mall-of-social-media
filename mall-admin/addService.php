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
    $number = 0;
    $numberchoose = 0;
    $division = $_POST["division"];
    $mainheader = $_POST["mainheader"];
    $secondsmall = $_POST["secondsmall"];
    $whatheader = $_POST["whatheader"];
    $whyheader = $_POST["whyheader"];
    $whypara = $_POST["whypara"];
    $number = $_POST["number"];
    $whychoose = $_POST["whychoose"];
    $choosepara = $_POST["choosepara"];
    $numberchoose = $_POST["numberchoose"];
    
    // -----------------------------------------------fetch id-----------------------------------------------------
    $fetchId = mysqli_query($connect,"SELECT max(`service_id`) FROM `service_details`")or die(mysqli_error($connect));
    $row = mysqli_fetch_array($fetchId);
    $service_id = $row[0]+1;
    // -----------------------------------------------end fetch id-----------------------------------------------------

    // -----------------------------------------------insert details-----------------------------------------------------
    $imagetarget = "../assets/images/services/png/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $service_detail = "INSERT INTO `service_details` (`service_id`,`division`,`mainheader`,`secondsmall`,`whatheader`,`whyheader`,`whypara`,`whychoose`,`choosepara`,`file`) VALUES ($service_id,'$division','$mainheader','$secondsmall','$whatheader','$whyheader','$whypara','$whychoose','$choosepara','$image')";
    mysqli_query($connect, $service_detail);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $imagetarget)) {
      $msg = "Image uploaded successfully";
      echo "<script>console.log('$msg');</script>";
    }
    else{
      $msg = "Failed to upload image";
      echo "<script>console.log('$msg');</script>";
    }
    // -----------------------------------------------end insert details-----------------------------------------------------

    // -----------------------------------------------insert points-----------------------------------------------------

    for ($i=0; $i < $number; $i++) { 
      $bold_header = $_POST["boldval".$i];
      $point = $_POST["point".$i];
      $service_points = "INSERT INTO `service_points` (`service_id`,`which_category`,`bold_header`,`points`,`main_id`) VALUES ($service_id,'whatService','$bold_header','$point',$i)";
      mysqli_query($connect, $service_points);
    }
    
    for ($i=0; $i < $numberchoose; $i++) { 
      $bold_choose = $_POST["boldvalchoose".$i];
      $pointchoose = $_POST["pointchoose".$i];
      $service_points = "INSERT INTO `service_points` (`service_id`,`which_category`,`bold_header`,`points`,`main_id`) VALUES ($service_id,'whychoose','$bold_choose','$pointchoose',$i)";
      mysqli_query($connect, $service_points);
    }
    // -----------------------------------------------end insert points-----------------------------------------------------
   
    // -----------------------------------------------insert images of services-----------------------------------------------------
    $countfiles = 0;
    $countfiles = count($_FILES['fileimage']['name']); 
    
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['fileimage']['name'][$i];
        $imagemain = $_FILES['fileimage']['name'];
        $service_images = "INSERT INTO `service_images` (`service_id`,`image_name`,`main_id`) VALUES ($service_id,'$imagemain[$i]',$i+1)";
        mysqli_query($connect, $service_images);  
        move_uploaded_file($_FILES['fileimage']['tmp_name'][$i],'../assets/images/services/'.$filename);
    }
    // -----------------------------------------------end insert images of services-----------------------------------------------------

  }  
?>
<main id="main">


  <section class="admin-inner-page  serviceSection-bg" >
    <div class="container-fluid  position-relative formWidth"  data-aos="fade-up" data-aos-delay="100">
      <div class="" class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>ADD SERVICE</h1>
          </div>
        </div>

        <div class="contact ">
          <!-- ======= Contact Section ======= -->
          <div class="container" data-aos="fade-up">

            <div class="row mt-5">
                <form method="POST" action="" id="addform" enctype="multipart/form-data"  class="php-email-form">
                    <div class="form-row">
                          <div class=" col-12 form-group">
                            <label for="division">Choose the division:</label>
                            <select class="form-control" name="division" id="division">
                                <option value="graphic-design">Graphic & Design</option>
                                <option value="digital-marketing">Digital Marketing</option>
                                <option value="writing-translation">Writing & Translation</option>
                                <option value="video-animation">Video & Animation</option>
                                <option value="programming-tech">Programming & Tech</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                    </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-3 form-group">
                      <label for="mainheader">Main Header </label>
                      <input type="text" class="form-control" name="mainheader" id="mainheader" >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="secondsmall">Second small sentence </label>
                      <input type="text" class="form-control" name="secondsmall" id="secondsmall" >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="whatheader">What is this service? </label>
                      <textarea type="text" class="form-control" name="whatheader" id="whatheader" row="5"></textarea>
                    </div>
                  </div>
                  <div class="form-group justify-content-center file">              
                    <label for="file">Add a PNG image for heading</label>
                    <input type="file" class="form-control" id="image" name="image"  >
                  </div>
                  <div class="form-group justify-content-center file">              
                    <label for="fileimage">Upload 3 images</label>
                    <input type="file" class="form-control" name="fileimage[]" id="fileimage" multiple>
                  </div>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                  <div class="form-row">
                    <div class="col-md-12 mb-3 form-group">
                      <label for="whyheader">Write the question for why the service...</label>
                      <input type="text" class="form-control" name="whyheader" id="whyheader" >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="whypara">Write a paragraph about the service</label>
                      <textarea type="text" class="form-control" name="whypara" id="whypara" row="5"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-row">
                    <div class="col-md-6 mb-3 form-group">
                      <label for="number">If you want to add a points</label><br>
                      <input type="number" placeholder="Number or points" class="inputCreate" name="number" id="number" >
                      <input type="button" id="create" class="buttonCreate btn-primary" name="create" value="CREATE" />
                    </div>
                  </div>
                  <div id="whyService">

                  </div>
                  <style>
                      .border
                      {
                          border:1px solid black;
                          border-radius:5px;
                          box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
                          padding: 20px;
                      }
                      .inputCreate{
                          border:1px solid lightgrey;
                          width:75%;
                          padding:10px;
                      }
                      .buttonCreate{
                          width: 20%;
                          border:0px;
                          text-align:center;
                          text-decoration:none;

                      }
                  </style>
                  <script>
                      
                      
                      document.getElementById("create").addEventListener("click", function() {
                        var val="";
                        var number= document.getElementById("number").value;
                          for (var index = 0; index < number; index++) {
                            val += '<div class="form-row">'
                                        +'<label for="boldval'+index+'"> '+(index+1)+') Bold Header </label>'
                                        +'<div class="col-md-12 mb-3 form-group border">'
                                            +'<input type="text" class="form-control" placeholder="Bold header" name="boldval'+index+'" id="boldval'+index+'" >'
                                            +'<textarea type="text" class="form-control" placeholder="line" name="point'+index+'" id="point'+index+'" row="4"></textarea>'
                                        +'</div>'
                                   +'</div>';
                          }
                          document.getElementById("whyService").innerHTML = val;

                      });
                  </script>

                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                  <div class="form-row">
                    <div class="col-md-12 mb-3 form-group">
                      <label for="whychoose">Write the question for why should the choose us ...</label>
                      <input type="text" class="form-control" name="whychoose" id="whychoose" >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="choosepara">Write a paragraph </label>
                      <textarea type="text" class="form-control" name="choosepara" id="choosepara" row="5"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-row">
                    <div class="col-md-6 mb-3 form-group">
                      <label for="numberchoose">If you want to add a points</label><br>
                      <input type="number" placeholder="Number or points" class="inputCreate" name="numberchoose" id="numberchoose" >
                      <input type="button" id="createchoose" class="buttonCreate btn-primary" name="createchoose" value="CREATE" />
                    </div>
                  </div>
                  <div id="chooseUs">
                  </div>
                  <script>
                      
                      
                      document.getElementById("createchoose").addEventListener("click", function() {
                        var val="";
                        var choose= document.getElementById("numberchoose").value;
                          for (var index = 0; index < choose; index++) { 
                            val += '<div class="form-row">' 
                                        +'<label for="boldvalchoose'+index+'"> '+(index+1)+') Bold Header </label>'
                                        +'<div class="col-md-12 mb-3 form-group border">'
                                            +'<input type="text" class="form-control" placeholder="Bold header" name="boldvalchoose'+index+'" id="boldvalchoose'+index+'" >'
                                            +'<textarea type="text" class="form-control" placeholder="line" name="pointchoose'+index+'" id="pointchoose'+index+'" row="4"></textarea>'
                                        +'</div>'
                                   +'</div>'; 
                          }
                          document.getElementById("chooseUs").innerHTML = val; 

                      });
                  </script>


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
