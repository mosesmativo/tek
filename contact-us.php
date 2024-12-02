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
                     <li><a href="our-services.php">Our Services</a></li>
                     <li><a href="our-work.php">Our Work</a></li>
                     <li><a href="contact-us.php" class="active">Contact Us</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>

      <main class="py-5 contact-us">
         <div class="container">
            <div class="row pb-4 justify-content-between d-flex">
               <div class="col-12 col-lg-10 mx-auto">
                  <div class="card p-5 w-100">
                     <div class="text-center pb-5">
                        <h1>Get In Touch</h1>
                        <h2>Talk to us and we will answer all your
                           questions.</h2>
                     </div>
                     <form action="#" class="px-3">
                        <div class="mb-4">
                           <label for="name" class="form-label">Full Name</label>
                           <input type="text" class="form-control" id="name" placeholder="Jane Doe" />
                        </div>
                        <div class="mb-4">
                           <label for="email" class="form-label">Email Address</label>
                           <input type="email" class="form-control" id="email" placeholder="xyz@gmail.com" />
                        </div>
                        <div class="mb-4">
                           <label for="phone" class="form-label">Phone Number</label>
                           <input type="number" class="form-control" id="phone" placeholder="+2547 02660 554" />
                        </div>
                        <div class="mb-4">
                           <label for="comments" class="form-label">How can we help?</label>
                           <textarea class="form-control" id="comments" placeholder="Type Here" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary btn-black w-100" href="#" role="button">Send</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </main>
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