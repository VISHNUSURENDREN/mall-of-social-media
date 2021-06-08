<?php  
  include "header.php";
?>
<script src="assets/js/jquery.js"></script>
<link rel="stylesheet" href="intl-tel-input-master/build/css/intlTelInput.css">
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contact us</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page services section-bg" id="hero">
    <div class="container-fluid  position-relative"  data-aos="fade-up" data-aos-delay="100">
      <div class="form">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Contact Us</h1>
            <h2>We are team  of talented designers</h2>
          </div>
        </div>

        <div class="contact ">
          <!-- ======= Contact Section ======= -->
          <div class="container" data-aos="fade-up">
            <div>
              <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

              <div id="personal-data" class="col-lg-4">
                <div class="info">
                  <div class="address">
                      <i class="icofont-google-map"></i>
                      <h4>Location:</h4>
                      <p>A108 Adam Street, New York, NY 535022</p>
                  </div>

                  <div class="email">
                      <i class="icofont-envelope"></i>
                      <h4>Email:</h4>
                      <p>info@example.com</p>
                  </div>

                  <div class="phone">
                      <i class="icofont-phone"></i>
                      <h4>Call:</h4>
                      <p>+1 5589 55488 55s</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-8 mt-5 mt-lg-0">
                <form class="contactForm php-email-form" id="contactForm" method="POST" >
                  <div class="form-row">
                    <div class="col-md-6 mb-3 form-group">
                      <label for="first-name">First name <span class="important">*</span></label>
                      <input type="text" class="form-control" name="first_name" id="first-name" >
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="last-name">Last name <span class="important">*</span></label>
                      <input type="text" class="form-control" name="last_name" id="last-name" >
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col mb-3">
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
                      <div class="row md-0">
                        <div class="col-3 contact-area">
                          <input type="tel" class="form-control" name="area_code" id="area-code">
                        </div>
                        <div class="col-9 contact-phone">
                          <input type="tel" class="form-control" name="phone_number" id="phone-number" placeholder="Phone Number" >
                        </div>
                      </div>
                      <p id="phone_number" class="none">Please provide a valid phone number</p>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="last-name">Country <span class="important">*</span></label>
                      <input type="text" class="form-control" name="country" id="Country" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                  </div>
                  
                  <!-- <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                      <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div> -->
                  <div class="text-center">
                    <button class="btn btn-primary" value="Submit Form" name="" onclick="contactForm()">Submit Form</button>
                  </div>
                </form>
                <script type="text/javascript" src="assets/js/validation.js"></script>               
                <script>
                  $("#contactForm").submit(function(){
                      return false;
                    });
                  function contactForm() {

                      var title = jQuery(".iti__selected-flag").attr( 'title' ); // <-- !!!
                      code=title.split(":")
                      console.log(code[1]);

                    console.log("hii");
                    // data=$(".contactForm").serialize()+'&'+$.param({ 'code': code[1] });

                    $.ajax({                     
                      type:'POST',
                      url:'send-email/emailContact.php',
                      data:$(".contactForm").serialize(),
                      success:function(data){
                        console.log("hello");
                        var data = JSON.parse(data);
                        if (data.msg=="error") {
                          alert(data.status);
                        }
                        else{
                          alert(data.status);
                          clearinput();
                        }										    
                      }
                    });
                    $("#contactForm").submit(function(){
                      return false;
                    });
                    function clearinput(){
                      $("#contactForm :input").each(function(){
                        $(this).val('');
                      });
                    }
                  }
                </script>
                <script src="intl-tel-input-master/build/js/intlTelInput.js"></script>
                <script src="assets/js/waitForKeyElements.js"></script>

                <script>
                  var input = document.querySelector("#area-code");
                  function grabDivTitle (jNode) {                      
                      var titleStr = jNode.attr ("title");
                      var code = titleStr.split(":")
                      console.log(code[1]);
                      console.log(document.querySelector("#phone-number").value);
                      
                  }

                  waitForKeyElements (".iti__selected-flag", grabDivTitle);
                  // var code = document.getElementsByClassName(".iti__selected-flag");
                  // console.log(code);
                  window.intlTelInput(input, {
                    // allowDropdown: false,
                    // autoHideDialCode: false,
                    autoPlaceholder: "off",
                    // dropdownContainer: document.body,
                    // excludeCountries: ["us"],
                    // formatOnDisplay: false,
                    // geoIpLookup: function(callback) {
                    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    //     var countryCode = (resp && resp.country) ? resp.country : "";
                    //     callback(countryCode);
                    //   });
                    // },
                    // hiddenInput: "full_number",
                    // initialCountry: "auto",
                    // localizedCountries: { 'de': 'Deutschland' },
                    // nationalMode: false,
                    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                    // placeholderNumberType: "MOBILE",
                    preferredCountries: ['ae', 'in'],
                    // separateDialCode: true,
                    utilsScript: "intl-tel-input-master/build/js/utils.js",
                  });
                  
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
</main>
<?php
  include "footer.php";
?>
