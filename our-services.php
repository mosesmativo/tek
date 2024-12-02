<php lang="en">

   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>TEK</title>
      <link rel="icon" href="favicon.ico" type="image/x-icon" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
         integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="css/style.mini.css" type="text/css" rel="stylesheet" />
      <link href="css/style.css" type="text/css" rel="stylesheet" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   </head>

   <body>
      <!-- Header Here -->
      <header class="header-area secondary-nav bg-white" id="navBar">
         <!-- SideBar Menu -->
         <!-- Sidebar -->
         <div id="sidebar" class="sidebar-menu d-flex align-items-center justify-content-between pb-5 flex-column">
            <a class="py-2 text-dark d-flex gap-4 align-items-center justify-content-center">
               <span class="close" id="sidebarClose">
                  <i class="fa-solid fa-xmark"></i>
               </span>
               <img src="images/logo-red.svg" alt="Dentsu Logo" class="logo" />
            </a>
            <ul class="px-5 w-100">
               <li><a href="about-us.php">About Us</a></li>
               <li><a href="our-services.php">Our Services</a></li>
               <li><a href="our-work.php">Our Work</a></li>
               <li><a href="contact-us.php" class="active">Contact Us</a></li>
            </ul>
            <div class="social-icons d-flex align-items-center justify-content-center pt-4">
               <a href="#"><i class="fab fa-facebook"></i></a>
               <a href="#"><i class="fab fa-x-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
         </div>

         <div class="container top-navigation">
            <div class="row align-items-center justify-content-between">
               <div class="col-6 col-md-3 d-flex gap-2 align-items-center">
                  <span class="humberger" id="hamburger-icon">
                     <img src="images/svg/humberger.svg" alt="partner logo" />
                  </span>
                  <a href="index.php" class="logo">
                     <img src="images/logo-red.svg" alt="logo" />
                  </a>
               </div>
               <div class="col-12 col-md-6 d-none d-md-none d-lg-block">
                  <ul class="d-flex mb-0 justify-content-center p-0">
                     <li><a href="about-us.php">About Us</a></li>
                     <li><a href="our-services.php" class="active">Our Services</a></li>
                     <li><a href="our-work.php">Our Work</a></li>
                     <li><a href="contact-us.php">Contact Us</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>

      <section class="film-video py-5 pb-4">
         <div class="container">
            <div class="row pb-5">
               <div class="col-12 col-lg-8 mx-auto">
                  <ul class="p-0 d-flex align-items-center w-100 justify-content-center button-link gap-4">
                     <li><a href="#" class="active">Films</a></li>
                     <li><a href="#">Photography</a></li>
                     <li><a href="#">Documentary</a></li>
                     <li><a href="#">Live Coverage</a></li>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-lg-6">
                  <a href="https://youtu.be/yPSshiEsYh0?si=d3Nvzw94YsZPExdT"
                     class="video-link lightbox-image video-fancybox card overflow-hidden d-flex justify-content-end h-100">
                     <div class="single-popup-wrap">
                        <div class="banner-background">
                           <img src="images/thematic.jpg" alt="about TEK" />
                        </div>
                        <div class="ht-popup-video video-button">
                           <div class="video-mark">
                              <div class="wave-pulse wave-pulse-1"></div>
                              <div class="wave-pulse wave-pulse-2"></div>
                           </div>
                           <div class="video-button__two">
                              <div class="video-play"><span class="video-play-icon"></span></div>
                           </div>
                        </div>
                        <div class="webcast-content p-4">
                           <h2>Safaricom Thematic </h2>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-12 col-lg-6 mid-content">
                  <h1>Film Production</h1>
                  <p>TEK Productions Kenya traces its origins back to the rich
                     tapestry of Kenya's early independence era, particularly
                     within the realm of film production and documentary making.
                     Established in [insert year], it emerged as a pioneering
                     entity, uniting filmmakers and enthusiasts to navigate the
                     ever-evolving landscape of cinematic storytelling.
                     Initially conceived as a platform for knowledge exchange
                     and professional development in the realms of film
                     production and documentary making, the organization swiftly
                     evolved into a catalyst for industry growth and
                     innovation.</p>
                  <p>
                     Initially conceived as a platform for knowledge exchange
                     and professional development in the realms of film
                     production and documentary making, the organization swiftly
                     evolved into a catalyst for industry growth and innovation.
                  </p>
               </div>
            </div>
         </div>
      </section>

      <section class="discover py-4 tools">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg-5 title-holder pb-3">
                  <h2>Our <span> Tools</span></h2>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="owl-carousel owl-theme four_cards_slides">
                     <div class="card overflow-hidden h-100">
                        <div class="card-image overflow-hidden">
                           <img src="images/tool-one.jpg" alt="leadership-banner" />
                        </div>
                        <div class="content_holder p-3 px-4 text-center">
                           <h3>RED CAMERA</h3>
                           <p>TEK Productions Kenya traces its origins back to
                              the rich
                           </p>
                        </div>
                     </div>
                     <div class="card overflow-hidden h-100">
                        <div class="card-image overflow-hidden">
                           <img src="images/tool-two.jpg" alt="leadership-banner" />
                        </div>
                        <div class="content_holder p-3 px-4 text-center">
                           <h3>3200 Lights</h3>
                           <p>TEK Productions Kenya traces its origins back to
                              the rich
                           </p>
                        </div>
                     </div>
                     <div class="card overflow-hidden h-100">
                        <div class="card-image overflow-hidden">
                           <img src="images/tools-three.jpg" alt="leadership-banner" />
                        </div>
                        <div class="content_holder p-3 px-4 text-center">
                           <h3>DLSR 400</h3>
                           <p>TEK Productions Kenya traces its origins back to
                              the rich
                           </p>
                        </div>
                     </div>
                     <div class="card overflow-hidden h-100">
                        <div class="card-image overflow-hidden">
                           <img src="images/tool-four.jpg" alt="leadership-banner" />
                        </div>
                        <div class="content_holder p-3 px-4 text-center">
                           <h3>RED CAMERA</h3>
                           <p>TEK Productions Kenya traces its origins back to
                              the rich
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="py-5 film-video">
         <div class="container">
            <div class="row align-items-between justify-content-between pb-4">
               <div class="col-12 text-center">
                  <div class="d-flex align-items-center justify-content-between">
                     <h2 class="mb-0">Some of <span>Our Films</span></h2>
                     <a class="btn btn-primary btn-black" href="#" role="button">View All
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-lg-6 mb-4">
                  <a href="https://youtu.be/yPSshiEsYh0?si=d3Nvzw94YsZPExdT"
                     class="video-link lightbox-image video-fancybox card overflow-hidden d-flex justify-content-end h-100">
                     <div class="single-popup-wrap">
                        <div class="banner-background">
                           <img src="images/film-one.jpg" alt="about TEK" />
                        </div>
                        <div class="ht-popup-video video-button">
                           <div class="video-mark">
                              <div class="wave-pulse wave-pulse-1"></div>
                              <div class="wave-pulse wave-pulse-2"></div>
                           </div>
                           <div class="video-button__two">
                              <div class="video-play"><span class="video-play-icon"></span></div>
                           </div>
                        </div>
                        <div class="webcast-content p-4">
                           <h2>Kwal Easter Campaign - V2</h2>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-12 col-lg-6 mb-4">
                  <a href="https://youtu.be/yPSshiEsYh0?si=d3Nvzw94YsZPExdT"
                     class="video-link lightbox-image video-fancybox card overflow-hidden d-flex justify-content-end h-100">
                     <div class="single-popup-wrap">
                        <div class="banner-background">
                           <img src="images/film-two.jpg" alt="about TEK" />
                        </div>
                        <div class="ht-popup-video video-button">
                           <div class="video-mark">
                              <div class="wave-pulse wave-pulse-1"></div>
                              <div class="wave-pulse wave-pulse-2"></div>
                           </div>
                           <div class="video-button__two">
                              <div class="video-play"><span class="video-play-icon"></span></div>
                           </div>
                        </div>
                        <div class="webcast-content p-4">
                           <h2>Safaricom Fibre</h2>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-12 col-lg-6 mb-4">
                  <a href="https://youtu.be/yPSshiEsYh0?si=d3Nvzw94YsZPExdT"
                     class="video-link lightbox-image video-fancybox card overflow-hidden d-flex justify-content-end h-100">
                     <div class="single-popup-wrap">
                        <div class="banner-background">
                           <img src="images/film-three.jpg" alt="about TEK" />
                        </div>
                        <div class="ht-popup-video video-button">
                           <div class="video-mark">
                              <div class="wave-pulse wave-pulse-1"></div>
                              <div class="wave-pulse wave-pulse-2"></div>
                           </div>
                           <div class="video-button__two">
                              <div class="video-play"><span class="video-play-icon"></span></div>
                           </div>
                        </div>
                        <div class="webcast-content p-4">
                           <h2>Huawei Network Coverage</h2>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-12 col-lg-6 mb-4">
                  <a href="https://youtu.be/yPSshiEsYh0?si=d3Nvzw94YsZPExdT"
                     class="video-link lightbox-image video-fancybox card overflow-hidden d-flex justify-content-end h-100">
                     <div class="single-popup-wrap">
                        <div class="banner-background">
                           <img src="images/film-four.jpg" alt="about TEK" />
                        </div>
                        <div class="ht-popup-video video-button">
                           <div class="video-mark">
                              <div class="wave-pulse wave-pulse-1"></div>
                              <div class="wave-pulse wave-pulse-2"></div>
                           </div>
                           <div class="video-button__two">
                              <div class="video-play"><span class="video-play-icon"></span></div>
                           </div>
                        </div>
                        <div class="webcast-content p-4">
                           <h2>National Bank X-mass Campaign</h2>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>

      <!-- Footer here -->
      <footer class="mt-4 py-5">
         <div class="container">
            <div class="row pt-4 align-items-center justify-content-between pb-4">
               <div class="col-12 col-lg-3 contact">
                  <h6>Get in Touch</h6>
                  <p>Talk to us If you would like us to help you craft a unique
                     story
                  </p>
                  <div class="newsletter-container">
                     <form class="newsletter-form">
                        <input type="email" class="email-input" placeholder="Your Email Address" required />
                        <button type="submit" class="submit-btn">Submit</button>
                     </form>
                  </div>
               </div>
               <div class="col-12 col-lg-8 d-flex">
                  <div class="item w-100">
                     <h6>About Us</h6>
                     <ul class="p-0">
                        <li><a href="about-us.php">Our History</a></li>
                        <li><a href="about-us.php">Who we Are</a></li>
                        <li><a href="about-us.php">The Team</a></li>
                     </ul>
                  </div>
                  <div class="item w-100">
                     <h6>Our Services</h6>
                     <ul class="p-0">
                        <li><a href="our-services.php">Film’s </a></li>
                        <li><a href="our-services.php">Documentaries</a></li>
                        <li><a href="our-services.php">Live Coverage</a></li>
                        <li><a href="our-services.php">Photography</a></li>
                     </ul>
                  </div>
                  <div class="item w-100">
                     <h6>Our Work</h6>
                     <ul class="p-0">
                        <li><a href="our-work.php">Case Studies</a></li>
                        <li><a href="our-work.php">Testimonials</a></li>
                     </ul>
                  </div>
                  <div class="item w-100">
                     <h6> Contact Us</h6>
                     <ul class="p-0 mb-4">
                        <li><a href="#" class="d-flex align-items-center gap-2"><i class="fa-solid fa-at"></i>
                              Info@tek.com</a></li>
                        <li><a href="#" class="d-flex align-items-center gap-2"><i class="fa-solid fa-phone"></i> +254 730
                              116
                              306
                           </a></li>
                        <li><a href="#" class="d-flex align-items-center gap-2"><i class="fa-solid fa-location-dot"></i>
                              Grace
                              lands Apartments Naivasha Road
                           </a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 d-flex justify-content-between social-media align-items-center">
                  <ul class="p-0 m-0"><a href="#">© 2024 tek. All Rights Reserved.</a></ul>
                  <ul class="p-0 d-flex align-items-center gap-3 m-0">
                     <li><a href="">Cookie Policy</a></li>
                     <li><a href="">Privacy Policy</a></li>
                     <li><a href="">Terms of Service</a></li>
                  </ul>
                  <ul class="p-0 d-flex align-items-center gap-4 social-holder m-0">
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.7.1.min.js"
         integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
         crossorigin="anonymous"></script>
      <script src="js/owl-carousel.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
         integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
         crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script src="js/main.js" type="text/Javascript"></script>
   </body>

</php>