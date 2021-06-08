<?php  
  include "header.php";
?>
<script src="assets/js/jquery.js"></script>
<link rel="stylesheet" href="intl-tel-input-master/build/css/intlTelInput.css">
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
 <!-- End Breadcrumbs -->

  <style>
        body{
            background: #fff;
        }
        .brick-section{
            box-sizing: border-box;

            position: relative;
            width: 100%;
            height: 100vh;
            transform-style: preserve-3d;
            perspective: 500px;
        }
        .brick-section form{
          background:transparent;
        }
        .black{
          border:0px !important;
          background-color:#fff !important; 
        }
        .brickBanner{
            z-index: -1;
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: -webkit-inline-box;
            flex-wrap: wrap;
        }
        @media screen  and (max-width: 768px){
          .brick-section{
            height:150vh;
          }
          .brick-banner{
            height:auto;
          }
          .brickBanner .brickBlocks{
            width:20vw !important;
            height:auto !important;
          }
          .contentBrick {
            margin-top: 20px !important;
          }
        }
        .brickBanner .brickBlocks{
            z-index: -1;
            position: relative;
            display: block;
            width: 10vw;
            height: 5vh;
            animation: animatebrick 2s ease-in-out forwards;
            animation-delay: 1s;
        }
        @keyframes animatebrick {
            0%{
                transform: translateZ(2000px);
                background:lightgray;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
                box-shadow: 0 5px 15px rgba(0,0,0,0.5);
            }
            100%{
                transform: translateZ(0px);
                background:lightgray;
                background-position: center;
                background-attachment: fixed;
                background-size: cover;
                border-radius:3px;
                border: 1px dotted  white;
                box-shadow: 0 5px 15px rgba(0,0,0,0);  
            }
        }
        .contentBrick{
            z-index: 1;
            position: relative;
            margin-top:80px;
            text-align: center;
            
        }
        .brick-section label,h1,h2{
          color:black;
        }
        .brick-section input{
          background-color:transparent;
          border:2px solid black;
          color: black;
        }
        .joinform{
          /* background-color: #fcfcfc9c; */
          border-radius: 9px;
          padding: 30px !important;
          /* box-shadow: 0 0 10px 0 rgba(16, 56, 84, 0.6);
          backdrop-filter: blur(3px); */
          background-color: transparent;
          display:none;
        }
        .joinform .Joinbutton{
          color:black;
          background-color:transparent;
          border:1px solid black;
          border-radius:5px;
          padding:10px;
        }
        .formeffect{
          box-shadow: 0 0 10px 0 rgba(16, 56, 84, 0.6);
          backdrop-filter: blur(3px);
          transiton: all 2s ease-in-out;
          display:block;
        }
    </style>
    

  <section class="brick-section">
      <div class="contentBrick container-fluid formWidth"  data-aos="fade-up" data-aos-delay="100">
        <div class="joinform">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
              <h1>Join us as a professional</h1>
              <h2>" Complete the puzzle and grow with us "</h2>
            </div>
          </div>
          <div class="">
            <!-- ======= Contact Section ======= -->
            <div class="container" data-aos="fade-up">
              <div class="row mt-5">
                <form action="send-email/joinUs.php" class="hiringForm col-md-12" id="joinUs" method="POST" enctype='multipart/formdata'>
                  <div class="form-row">
                    <div class="col-md-6 mb-3 form-group">
                      <label for="first-name">Name <span class="important">*</span></label>
                      <input type="text" class="form-control" name="first_name" id="first-name" >
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="email">Email Id <span class="important">*</span></label>
                      <input type="email" class="form-control" name="email_id" id="email">
                      <p id="email_id" class="none">
                        Please provide a valid Email Id.
                      </p>
                    </div>  
                  </div>
                  
                  <div class="form-row">
                    <div class="col-md-6 mb-3 form-group">
                      <label for="first-name">Phone Number <span class="important">*</span></label>
                      <div id="contact" class="row md-0">
                        <div class="col-3 contact-area">
                          <input type="tel" class="form-control" name="area_code" id="area-code">
                        </div>
                        <div class="col-9 contact-phone">
                          <input type="tel" class="form-control" name="phone_number" id="phone-number" placeholder="Phone Number" >
                          <p id="phone_number" class="none">
                          Please provide a valid Phone number.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="last-name">Country <span class="important">*</span></label>
                      <input type="text" class="form-control" name="country" id="Country" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="address">What is your professionality?<span class="important">*</span></label>
                    <input class="form-control" name="profession" id="profession" />
                  </div>
                  <div class="text-center">
                    <button class="Joinbutton" value="Submit Form" name="submit" onclick="joinUs()">SUBMIT</button>
                  </div>
                </form>   
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="brickBanner">
        <div class="brickBlocks"></div>
    </div>
  </section>
  
</main>
<?php
  include "footer.php";
?>
<script>
  $("#joinUs").submit(function(){
      return false;
    });

  function joinUs() {

    $.ajax({                     
      type:'POST',
      url:'send-email/join-us-email.php',
      data: $("#joinUs").serialize(),
      success:function(data){
        var data = JSON.parse(data);
        if (data.msg=="error") {
          alert(data.status);
        }
        else{
          alert(data.status);
          clearinput();
          document.getElementById("joinUs").reset();

        }										    
      }
    });
    $("#joinUs").submit(function(){
      return false;
    });
    function clearinput(){
      $("#joinUs :input").each(function(){
        $(this).val('');
      });
    }
  }
</script>
<script type="text/javascript" src="assets/js/validation.js"></script>
  
<script>
  const brickBanner = document.getElementsByClassName('brickBanner')[0];
  const brickBlocks = document.getElementsByClassName('brickBlocks');
  for (var i=1; i < 400 ;i++){
    // console.log(Math.random(400)*100);
    if(i>33 || i<33){
      brickBanner.innerHTML += "<div class='brickBlocks'></div>";  
    }
    else{
      brickBanner.innerHTML += "<div class='brickBlocks' id='black'></div>";  
    }
    const brickDuration = Math.random()*2.5;
    brickBlocks[i].style.animationDuration = 2+brickDuration+ 's';
    brickBlocks[i].style.animationDelay = brickDuration+ 's';

  }
  
  setTimeout(() => {
    document.getElementById("black").classList.add("black");
    document.getElementsByClassName('joinform')[0].classList.add('formeffect');
    headerColor("transparent","black");    
  }, 7000);

</script>
<script src="intl-tel-input-master/build/js/intlTelInput.js"></script>
<script>
  var input = document.querySelector("#area-code");
  window.intlTelInput(input, {
    autoPlaceholder: "off",
    preferredCountries: ['ae', 'in'],
    utilsScript: "intl-tel-input-master/build/js/utils.js",
  });
  
</script>
<script>
  
</script>