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
          <li>We are Hiring</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page services section-bg" id="hero">
    <div class="container-fluid  position-relative formWidth"  data-aos="fade-up" data-aos-delay="100">
      <div class="form">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>We are Hiring</h1>
            <h2>We are team  of talented designers</h2>
          </div>
        </div>

        <div class="contact ">
          <!-- ======= Contact Section ======= -->
          <div class="container" data-aos="fade-up">

            <div class="row mt-5">
                <form action="send-email/hiringContact.php" class="hiringForm php-email-form" id="hiringForm" method="POST" enctype='multipart/formdata'>
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
                    <div class="col-md-6 mb-3 form-group">
                      <label for="date">Date of Birth <span class="important">*</span></label>
                      <input type="date" class="form-control" name="date" id="Date">
                      
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="age">Age <span class="important">*</span></label>
                      <input type="number" class="form-control" name="age" id="age" >
                    </div>
                  </div>
                  <div class="form-row">                
                    <div class="col-md-6 mb-3 form-group">  
                      <label for="">Gender <span class="important">*</span></label>
                      <div class="gender form-control row">
                        <div class="col-6">
                          <input type="radio" id="male"  name="gender" value="Male">
                          <label for="male">Male</label>
                        </div>
                        <div class="col-6">
                          <input type="radio" id="female" name="gender" value="Female">
                          <label for="female">Female</label>
                        </div>                                         
                        
                        
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="email">Email Id <span class="important">*</span></label>
                      <input type="email" class="form-control" name="email_id" id="email">
                      <p id="email_id" class="none">
                        Please provide a valid Email Id.
                      </p>
                    </div>                 
                  </div>
                  <div class="form-group">
                    <label for="address">Address<span class="important">*</span></label>
                    <textarea class="form-control" name="address" id="address" rows="2"></textarea>
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
                  <label for="">Choose which position you wan to apply for:<span class="important">*</span></label>
                  <div class="form-row"> 
                    <div class="radioPosition radio">                                    
                    <div class="col-12 mb-3 form-group row">
                      <div class="col-md-6">
                        <input type="radio" id="graphics_design" name="position" value="Graphics&Design">
                        <label for="graphics_design">Graphics & Design</label>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" id="digital_marketing" name="position" value="Digital_Marketing">
                        <label for="digital_marketing">Digital Marketing</label>
                      </div>         
                      <div class="col-md-6">
                        <input type="radio" id="writing_translation" name="position" value="Writing&Translation">
                        <label for="writing_translation">Writing & Translation</label>
                      </div>
                    
                      <div class="col-md-6">
                        <input type="radio" id="video_animation" name="position" value="Video&Animation">
                        <label for="video_animation">Video & Animation</label>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" id="programming_tech" name="position" value="Programming&Tech">
                        <label for="programming_tech">Programming & Tech</label>
                      </div>
                      <div class="col-md-6">
                        <input type="radio" id="Business" name="position" value="Business">
                        <label for="Business">Business</label>
                      </div>
                    </div>
                    </div>
                  </div>
                  <!-- <div class="form-group justify-content-center file">              
                    <label for="file">Upload your Resume<span class="important">*</span></label>
                    <input type="file" class="form-control" name="file" id="file" accept=".pdf" >
                  </div> -->
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
                    <button class="btn btn-primary" value="Submit Form" name="submit" onclick="hiringForm()">SUBMIT</button>
                  </div>
                </form>
                <script type="text/javascript" src="assets/js/validation.js"></script>
                
                <script>
                  $("#hiringForm").submit(function(){
                      return false;
                    });

                  function hiringForm() {

                      // var title = jQuery(".iti__selected-flag").attr( 'title' ); // <-- !!!
                      // code=title.split(":")
                      // console.log(code[1]);

                      // var data = new FormData();
                      // //Form data
                      // var form_data = $('.hiringForm').serializeArray();
                      // $.each(form_data, function (key, input) {
                      //     data.append(input.name, input.value);
                      // });

                      // //File data
                      // var file_data = $('input[name="file"]')[0].files;
                      // for (var i = 0; i < file_data.length; i++) {
                      //     data.append("my_images[]", file_data[i]);
                      // }

                    // console.log(data);
                    // data=$(".hiringForm").serialize()+'&'+$.param({ 'code': code[1] });
                    $.ajax({                     
                      type:'POST',
                      url:'send-email/hiringContact.php',
                      data: $(".hiringForm").serialize(),
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
                    $("#hiringForm").submit(function(){
                      return false;
                    });
                    function clearinput(){
                      $("#hiringForm :input").each(function(){
                        $(this).val('');
                      });
                    }
                  }
                </script>
                <script src="intl-tel-input-master/build/js/intlTelInput.js"></script>
                <script>
                  var input = document.querySelector("#area-code");
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
  </section>  
</main>
<?php
  include "footer.php";
?>
