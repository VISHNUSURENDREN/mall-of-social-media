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
          <li>Writing & Translation</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="inner-page services section-bg" id="hero">
    <div class="container-fluid position-relative"  data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
        <div id="typed3">Writing &
          <span id="typed4" class="txt-type" data-wait="2000" data-words='[" Translation.", "ترجمة.", "अनुवाद|"]'></span>
        </div>
          <h2>We are team  of talented designers</h2>
        </div>
      </div>
      
      <div class="text-center">
        <a href="" class="btn-get-started scrollto">Contact us</a>
      </div>


      <div class="row icon-boxes">
      <?php
      $index=0;
      $fetchService = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='writing-translation'")or die(mysqli_error($connect));
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
                   <a  href="" onclick="openHere(this,<?php echo $index?>,'writing-translation-service.php?service=<?php echo $service['mainheader']?>& id=<?php echo $service['service_id']?>'); return false;" title="more information"><i class="bx bx-plus"></i></a>
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
  class TypeWriter {
    constructor(txtElement, words, wait = 2000) {
      this.txtElement = txtElement;
      this.words = words;
      this.txt = '';
      this.wordIndex = 0;
      this.wait = parseInt(wait, 10);
      this.type();
      this.isDeleting = false;
    }

    type() {
      // Current index of word
      const current = this.wordIndex % this.words.length;
      // Get full text of current word
      const fullTxt = this.words[current];

      // Check if deleting
      if(this.isDeleting) {
        // Remove char
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        // Add char
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      // Insert txt into element
      this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

      // Initial Type Speed
      let typeSpeed = 300;

      if(this.isDeleting) {
        typeSpeed /= 2;
      }

      // If word is complete
      if(!this.isDeleting && this.txt === fullTxt) {
        // Make pause at end
        typeSpeed = this.wait;
        // Set delete to true
        this.isDeleting = true;
      } else if(this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        // Move to next word
        this.wordIndex++;
        // Pause before start typing
        typeSpeed = 500;
      }

      setTimeout(() => this.type(), typeSpeed);
    }
  }
  // Init On DOM Load
  document.addEventListener('DOMContentLoaded', init);

  // Init App
  function init() {
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');
    // Init TypeWriter
    new TypeWriter(txtElement, words, wait);
  }
</script>
<?php
  include "footer.php";
?>

