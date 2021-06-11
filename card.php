<?php
include "header.php";
?>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <style>

.service-cards{
  width: 100%;
  margin: 100px 0px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.swiper-container {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 200px;
}

.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 500px;
  height: 500px;
  /* background: #000; */
  -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #0006);
}
.swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .swiper-slide img:hover{

      }
  @media screen and (max-width:1300px) {
    .swiper-slide {
      width: 350px;
      height: 350px;
    }
  }
.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
      
</style>
  <section class="service-cards">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="assets/img/business/business-plans/business-plans-1.jpeg" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/business/business-plans/business-plans-2.jpeg" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/business/business-plans/business-plans-3.jpeg" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/business/business-plans/business-plans-4.jpeg" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/business/business-plans/business-plans-1\5.jpeg" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
</section>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        // mousewheel: true,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        coverflowEffect: {
          rotate: 20,
          stretch: 0,
          depth: 200,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
<?php
  include "footer.php";
?>



  
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" integrity="sha512-dLxUelApnYxpLt6K2iomGngnHO83iUvZytA3YjDUCjT0HDOHKXnVYdf3hU4JjM8uEhxf9nD1/ey98U3t2vZ0qQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="hover-effect.js"></script>
   <script src="hover.js"></script> -->

