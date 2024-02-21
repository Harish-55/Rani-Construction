<?php include('header.php') ?>

<!-- Banner -->
<section class="pt-breadcrumb">
   <div class="pt-bg-overley pt-opacity4" style="background-image: url('images/bg/04.jpg');"></div>
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="pt-breadcrumb-title">Contact Us</h1>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home mr-2"></i>Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- Banner -->

<!-- Location -->
<section class="pt-section">
   <div class="container">
      <div class="row">
         <div class="col-xl-4  col-lg-6 col-12 mb-4">
            <div class="icon-box1 text-center">
               <div class="icon-box-icon">
                  <span class="icon animation">
                     <i class="fas fa-map-marker-alt"></i>
                  </span>
               </div>
               <div class="icon-box-content">
                  <h3 class="icon-box-title">
                     <span>Our Location</span>
                  </h3>
                  <p class="icon-box-description">No.6,Bank Staff Colony 4th Cross, Madhakottai Road, Thanjavur-5</p>
               </div>
            </div>
         </div>
         <div class="col-xl-4  col-lg-6 col-12 mb-4 mb-sm-0 mt-lg-0">
            <div class="icon-box1 text-center">
               <div class="icon-box-icon">
                  <span class="icon animation">
                     <i class="fas fa-phone-alt"></i>
                  </span>
               </div>
               <div class="icon-box-content">
                  <h3 class="icon-box-title">
                     <span> Phone Number </span>
                  </h3>
                  <p class="icon-box-description">
                     <a href="tel:+919944114185" style="color: #565969;">+91 99 44 11 4185</a><br>
                     <a href="tel:+919597050115" style="color: #565969;">+91 95 97 05 0115</a>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-4  col-lg-12 col-12 mt-md-4 mt-lg-0">
            <div class="icon-box1 text-center">
               <div class="icon-box-icon">
                  <span class="icon animation">
                     <i class="fas fa-envelope"></i>
                  </span>
               </div>
               <div class="icon-box-content">
                  <h3 class="icon-box-title">
                     <span>Mail us</span>
                  </h3>
                  <p class="icon-box-description">
                     <a href="mailto:raniconstruction.ah@gmail.com" style="color: #565969;">raniconstruction.ah@gmail.com</a>
                     <a href="mailto:info@raniconstruction.com" style="color: #565969;">info@raniconstruction.com</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Location -->

<!-- Map -->
<div class="position-relative">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.747342634054!2d79.12102477408716!3d10.753945259609958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baab8dad99988f3%3A0xf18d7917e04021c5!2sRANI%20CONSTRUCTION!5e0!3m2!1sen!2sin!4v1708501318801!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Map -->

<!-- Conatct -->
<section class="conatct pt-contact-form pt-section-overlap ">
   <div class="container">
      <div class="row no-gutters">
         <div class="col-xl-6 p-4 p-md-5 pt-bg-light">
            <div class="pt-bg-overley1 pt-opacity1" style="background-image: url('images/bg/03.png');">
            </div>
            <div class="pt-section-title-box">
               <span class="pt-section-sub-title">Get Quote</span>
               <h2 class="pt-section-title">Request A Quote</h2>
            </div>
            <form class="quote-from" method="post" action="mail.php" autocomplete="off">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter name">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="email" name="email" class="form-control" id="Email" placeholder="Enter email">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="text" name="mobile" class="form-control" id="Subject" placeholder="Enter mobile number">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="6" placeholder="Enter your message"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <button class=" btn btn-primary pt-bg-primary text-white border-0" type="submit">Send
                           Message</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-xl-6 d-lg-inline-block" style="background-image: url('images/about/demo-5.jpg'); background-size: cover; background-position: center center;">
         </div>
      </div>
   </div>
</section>
<!-- Conatct -->

<?php include('footer.php') ?>