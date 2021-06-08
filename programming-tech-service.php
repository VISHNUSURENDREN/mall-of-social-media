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
<section class="logo-container ">
<canvas id="canvas"></canvas>
    <div class="container-fluid  position-relative program-header" id="heading" data-aos="fade-up" data-aos-delay="100">
      <div class="row heading">
          <div class="col-xl-7 col-lg-9 logo-title " id="p-title">
              <h1><?php echo $service['mainheader']?></h1>
              <h3><?php echo $service['secondsmall']?></h3>
              <p><?php echo $service['whatheader']?></p>
              <a href="contact.php" class="pbtn logobtn get-started scrollto">Contact us</a> 
          </div>
          <div class=" col-md-4 col-lg-4 logo-img" >
              <img src="assets/images/services/png/<?php echo $service["file"]?>" style="max-width: 100%;height: auto;" alt="<?php echo $service["mainheader"]?>">        
          </div>
      </div>          
    </div>
   
    <style>
    canvas {
  background: #232323;
  z-index: -3;
  position: absolute;
  /* width:100vw; */
  /* height:00px; */
}
#p-title{
    color: white !important;
    text-shadow: 2px 2px 8px #000;
}
.pbtn{
    color: white;
    border-color: white;
}
@media screen  and (max-width: 500px){
  canvas{
    transform: rotate(-90deg) translateY(-82%) translateX(-16%);
  }
}
@media screen  and (min-width: 768px and max-width: 1300px){
  canvas{
    transform: rotate(0) translateY(0) translateX(0) !important;
  }
}
@media screen  and (min-width: 1300px){
  .program-header{
    height:100vh !important;
  } 
  canvas{
    transform: translateY(-9%) translateX(0%);
  }
}
</style>

<script>

var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext('2d');

// canvas.width = window.innerWidth;
// canvas.height = window.innerHeight;
xs=0;

if (window.innerWidth < 500) {
  xs = 15;
  canvas.width = 950;
  canvas.height = 360;
  // var elmnt = document.getElementById("myDIV");
  // var txt = "Height including padding and border: " + elmnt.offsetHeight +
}
else if(window.innerWidth > 1250){
  xs = 100;
  canvas.width = window.innerWidth;
  canvas.height = 844;
}
else if(window.innerWidth > 500 && window.innerWidth < 1250){
  canvas.width = window.innerWidth;
  xs = 60;
  canvas.height = window.innerHeight;
}
var stars = [], // Array that contains the stars
    FPS = 60, // Frames per second
    x = xs,
     // Number of stars
    mouse = {
      x: 0,
      y: 0
    };  // mouse location

// Push stars to array

for (var i = 0; i < x; i++) {
  stars.push({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    radius: Math.random() * 1 + 1,
    vx: Math.floor(Math.random() * 50) - 25,
    vy: Math.floor(Math.random() * 50) - 25
  });
}

// Draw the scene

function draw() {
  ctx.clearRect(0,0,canvas.width,canvas.height);
  
  ctx.globalCompositeOperation = "lighter";
  
  for (var i = 0, x = stars.length; i < x; i++) {
    var s = stars[i];
  
    ctx.fillStyle = "#fff";
    ctx.beginPath();
    ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);
    ctx.fill();
    ctx.fillStyle = 'black';
    ctx.stroke();
  }
  
  ctx.beginPath();
  for (var i = 0, x = stars.length; i < x; i++) {
    var starI = stars[i];
    ctx.moveTo(starI.x,starI.y); 
    if(distance(mouse, starI) < 150) ctx.lineTo(mouse.x, mouse.y);
    for (var j = 0, x = stars.length; j < x; j++) {
      var starII = stars[j];
      if(distance(starI, starII) < 150) {
        //ctx.globalAlpha = (1 / 150 * distance(starI, starII).toFixed(1));
        ctx.lineTo(starII.x,starII.y); 
      }
    }
  }
  ctx.lineWidth = 0.05;
  ctx.strokeStyle = 'white';
  ctx.stroke();
}

function distance( point1, point2 ){
  var xs = 0;
  var ys = 0;
 
  xs = point2.x - point1.x;
  xs = xs * xs;
 
  ys = point2.y - point1.y;
  ys = ys * ys;
 
  return Math.sqrt( xs + ys );
}

// Update star locations

function update() {
  for (var i = 0, x = stars.length; i < x; i++) {
    var s = stars[i];
  
    s.x += s.vx / FPS;
    s.y += s.vy / FPS;
    
    if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
    if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
  }
}

canvas.addEventListener('mousemove', function(e){
  mouse.x = e.clientX;
  mouse.y = e.clientY;
});

// Update and draw

function tick() {
  draw();
  update();
  requestAnimationFrame(tick);
}

tick();
</script>

<div class="logo-section" id="section2">
        <div class="logo-content">
            <div class="service-bg">
                <div class="container-fluid " data-aos="fade-up">
                    <div class="serviceDetail" data-aos="fade-in" data-aos-delay="500">
                        <div class="row">
                            <div class="col-lg-8 serviceContent " data-aos="fade-left" data-aos-delay="100">
                                <div class=" ">
                                <h3><?php echo $service["whyheader"]?></h3>
                                    <p class="font-italic">
                                      <?php echo $service["whypara"]?>
                                    </p>
                                    <?php
                                      while($whatService = mysqli_fetch_array($fetchwhatService)){
                                    ?>
                                    <ul>
                                        <b><?php echo $whatService['bold_header'] ?></b>
                                            <li><i class="bx bx-check-double"></i><?php echo $whatService['points'] ?></li>
                                    </ul>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="image-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                                    <img src="assets/images/services/<?php echo $image1['image_name']?>" class="img-fluid" alt="<?php echo $service["whatheader"]?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="logo-section" id="section3">
        <div class="logo-content">
            <div class="parallax2">
                <div class="container-fluid " data-aos="fade-up">
                    <div class="serviceDetail" data-aos="fade-in" data-aos-delay="500">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <div class="image-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                                    <img src="assets/images/services/<?php echo $image2['image_name']?>" class="img-fluid" alt="<?php echo $service["whatheader"]?>">
                                </div>
                            </div>
                            <div class="col-lg-8 serviceContent" data-aos="fade-left" data-aos-delay="100">
                                <div class="">
                                    <h3><?php echo $service["whychoose"]?></h3>
                                    <p class="font-italic">
                                    <?php echo $service["choosepara"]?>
                                    </p>
                                    <?php
                                      while($whychoose = mysqli_fetch_array($fetchwhychoose)){
                                    ?>
                                    <ul>
                                        <b><?php echo $whychoose['bold_header'] ?></b>
                                            <li><i class="bx bx-check-double"></i><?php echo $whychoose['points'] ?></li>
                                    </ul>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<?php 
    include "footer.php";
?>
<SCRIPt>
    headerColor("transparent","white");  
    $(".get-started-btn").css("color","black");

</SCRIPt>