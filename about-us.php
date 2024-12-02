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
                     <li><a href="about-us.php" class="active">About Us</a></li>
                     <li><a href="our-services.php">Our Services</a></li>
                     <li><a href="our-work.php">Our Work</a></li>
                     <li><a href="contact-us.php">Contact Us</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>

      <section class="py-5 about-us">
         <div class="container">
            <div class="row d-flex justify-content-between align-items-center pb-4">
               <div class="col-12 title">
                  <div class="d-flex align-items-center justify-content-between pb-2">
                     <h2>About <span>Us</span></h2>
                     <a class="btn btn-primary btn-black" href="#" role="button">Read More
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                  </div>

                  <p><strong>We are a creative film and Documentaries production
                        house in Nairobi, Kenya Fueled by PASSION and BIG IDEAS,
                        we present organizations with a unique array of services
                        that inform and help them achieve their communication
                        objectives</strong>
                  </p>
               </div>
            </div>
            <div class="row d-flex justify-content-center">
               <div class="col-12 col-lg-7 mb-4 large-box">
                  <a href="https://www.youtube.com/watch?v=ql5cSgYLGFE"
                     class="video-link lightbox-image video-fancybox card overflow-hidden d-flex justify-content-end h-100">
                     <div class="single-popup-wrap">
                        <div class="banner-background">
                           <img src="images/about-one.jpg" alt="about TEK" />
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
                     </div>
                  </a>
               </div>
               <div
                  class="col-12 col-lg-5 d-flex flex-column justify-content-between align-items-between gap-4 mb-4 small-box">
                  <a class="video-link video-fancybox card overflow-hidden d-flex justify-content-end h-100"
                     data-fancybox="gallery" data-caption="Caption #1" href="images/about-two.jpg">
                     <div class="single-popup-wrap">
                        <div class="banner-background">
                           <img src="images/about-two.jpg" alt="about TEK" />
                        </div>
                        <div class="icon"><i class="fa-solid fa-square-plus"></i></div>
                     </div>
                  </a>
                  <a href="images/about-three.jpg"
                     class="video-link lightbox-image video-fancybox card overflow-hidden d-flex justify-content-end h-100"
                     data-fancybox="gallery" data-caption="Caption #2">
                     <div class="single-popup-wrap">
                        <div class="banner-background">
                           <img src="images/about-three.jpg" alt="about TEK" />
                        </div>
                        <div class="icon"><i class="fa-solid fa-square-plus"></i></div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>

      <section class="history pb-5">
         <div class="container">
            <div class="row">
               <div class="col-12 card py-5 px-3 pb-3">
                  <div class="row">
                     <div class="col-12 title-holder">
                        <h2>Our <span>History</span></h2>
                        <p><strong>Our history is a tapestry of triumphs,
                              challenges, and cultural exchanges, shaping our
                              identity and driving our passion to produce and
                              share genuine stories.</strong></p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <ul class="nav nav-tabs d-flex gap-3" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="tab-2024" data-bs-toggle="tab" data-bs-target="#content-2024"
                                 type="button" role="tab" aria-controls="content-2024" aria-selected="true">2024</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2023" data-bs-toggle="tab" data-bs-target="#content-2023"
                                 type="button" role="tab" aria-controls="content-2023" aria-selected="false">2023</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2022" data-bs-toggle="tab" data-bs-target="#content-2022"
                                 type="button" role="tab" aria-controls="content-2022" aria-selected="false">2022</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2021" data-bs-toggle="tab" data-bs-target="#content-2021"
                                 type="button" role="tab" aria-controls="content-2021" aria-selected="false">2021</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2020" data-bs-toggle="tab" data-bs-target="#content-2020"
                                 type="button" role="tab" aria-controls="content-2020" aria-selected="false">2020</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2019" data-bs-toggle="tab" data-bs-target="#content-2019"
                                 type="button" role="tab" aria-controls="content-2019" aria-selected="false">2019</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2018" data-bs-toggle="tab" data-bs-target="#content-2018"
                                 type="button" role="tab" aria-controls="content-2018" aria-selected="false">2018</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2017" data-bs-toggle="tab" data-bs-target="#content-2017"
                                 type="button" role="tab" aria-controls="content-2017" aria-selected="false">2017</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2016" data-bs-toggle="tab" data-bs-target="#content-2016"
                                 type="button" role="tab" aria-controls="content-2016" aria-selected="false">2016</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2015" data-bs-toggle="tab" data-bs-target="#content-2015"
                                 type="button" role="tab" aria-controls="content-2015" aria-selected="false">2015</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2014" data-bs-toggle="tab" data-bs-target="#content-2014"
                                 type="button" role="tab" aria-controls="content-2014" aria-selected="false">2014</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2012" data-bs-toggle="tab" data-bs-target="#content-2012"
                                 type="button" role="tab" aria-controls="content-2012" aria-selected="false">2012</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="tab-2007" data-bs-toggle="tab" data-bs-target="#content-2007"
                                 type="button" role="tab" aria-controls="content-2007" aria-selected="false">2007</button>
                           </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="content-2024" role="tabpanel" aria-labelledby="tab-2024">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>2024 – Tek re-branding!</h3>
                                          <p>TEK Productions Kenya traces its
                                             origins back to the rich tapestry
                                             of Kenya's early independence era,
                                             particularly within the realm of
                                             film production and documentary
                                             making. Established in [insert
                                             year], it emerged as a pioneering
                                             entity, uniting filmmakers and
                                             enthusiasts to navigate the
                                             ever-evolving landscape of
                                             cinematic storytelling. Initially
                                             conceived as a platform for
                                             knowledge exchange and professional
                                             development in the realms of film
                                             production and documentary making,
                                             the organization swiftly evolved
                                             into a catalyst for industry growth
                                             and innovation.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2023" role="tabpanel" aria-labelledby="tab-2023">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Staff growth to over 50</h3>
                                          <p>1. Tek celebrated 10 years in business.</p>
                                          <p>2. Production department office expansion.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2022" role="tabpanel" aria-labelledby="tab-2022">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Produced a TVC for Huawei with Eliud Kipchoge</h3>
                                          <p>1. Involved with production for KCB Bank rebrand.</p>
                                          <p>2. Hired the first female videographer.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2021" role="tabpanel" aria-labelledby="tab-2021">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Moved office to current bigger space</h3>
                                          <p>1. Installed archiving management server.</p>
                                          <p>2. Started live streaming services.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2020" role="tabpanel" aria-labelledby="tab-2020">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Shifted to more storytelling.</h3>
                                          <p>1. Produced Safaricom Foundation documentaries. </p>
                                          <p>2. Produced Safaricom @20 3-part documentary.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2019" role="tabpanel" aria-labelledby="tab-2019">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Tek Production Department was created.</h3>
                                          <p>1. First production of a TVC (AJUA TVC) & Eliud Kipchoge M-PESA 159 TVC.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2018" role="tabpanel" aria-labelledby="tab-2018">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Fully fledged Archiving department was created.</h3>
                                          <p>1. Hired first lady photographer.</p>
                                          <p>2. Created first website.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2017" role="tabpanel" aria-labelledby="tab-2017">

                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>First team building in Naivasha.</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2016" role="tabpanel" aria-labelledby="tab-2016">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Incorporated to TEK Production Services Ltd.</h3>
                                          <p>Won Safaricom tender for photography, videography & editing services.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2015" role="tabpanel" aria-labelledby="tab-2015">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Acquired a physical office at Graceland flats</h3>
                                          <p>Won the first-ever tender which was KCB bank.</p>
                                          <p>We acquired the first staff office car.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2014" role="tabpanel" aria-labelledby="tab-2014">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Employed first permanent staff, less than five</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2012" role="tabpanel" aria-labelledby="tab-2012">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3>Began business operations with Multichoice Kenya as the first client.</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="content-2007" role="tabpanel" aria-labelledby="tab-2007">
                              <div class="owl-carousel owl-theme historySlides">
                                 <div class="px-5 pt-5 pb-5">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-lg-5 px-4">
                                          <div class="image-holder">
                                             <img src="images/history-one.jpg" alt="TEK History 2024" width="100%"
                                                height="100%" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-7 px-4">
                                          <h3> Tek was registered and founded as a locally owned partnership company.</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>

      <section class="discover py-4 radius-left">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg-5 title-holder pb-3">
                  <h2>Our <span>Services</span></h2>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="owl-carousel owl-theme three_cards_slides">
                     <div class="card overflow-hidden h-100">
                        <div class="card-image overflow-hidden">
                           <img src="images/documentary-film.jpg" alt="leadership-banner" />
                        </div>
                        <div class="content_holder p-5 text-center">
                           <h3>Film’s</h3>
                           <p>We have an unwavering dedication to storytelling,
                              we possess the expertise and finesse to bring
                              great films to life</p>
                           <a class="btn btn-primary btn-black" href="#" role="button">Read More <i
                                 class="fa-solid fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="card overflow-hidden h-100">
                        <div class="card-image overflow-hidden">
                           <img src="images/documentary-film.jpg" alt="leadership-banner" />
                        </div>
                        <div class="content_holder p-5 text-center">
                           <h3>Documentaries</h3>
                           <p>Embedded within our DNA is a passion for
                              storytelling, channeling our expertise into the
                              creation of compelling documentaries.
                           </p>
                           <a class="btn btn-primary btn-black" href="#" role="button">Read More <i
                                 class="fa-solid fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="card overflow-hidden h-100">
                        <div class="card-image overflow-hidden">
                           <img src="images/live-coverage.jpg" alt="leadership-banner" />
                        </div>
                        <div class="content_holder p-5 text-center">
                           <h3>Live Coverage</h3>
                           <p>Stepping beyond the confines of traditional
                              storytelling, we also excel in live coverage,
                              capturing the essence of events as they unfold.
                           </p>
                           <a class="btn btn-primary btn-black" href="#" role="button">Read More <i
                                 class="fa-solid fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="py-5 team-cards">
         <div class="container">
            <div class="row align-items-between justify-content-between pb-4">
               <div class="col-12 title-holder text-center">
                  <h2>Our <span>Team</span></h2>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column py-4">
                        <h3>Japhet Kangodu</h3>
                        <p>Managing Director </p>
                        <span class="mb-3 d-block">Japheth, the founder of TEK Production, embodies the spirit of Ralph Waldo Emerson's quote: "Do not follow where the path may lead. </span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column py-4">
                        <h3>Pauline Sabala</h3>
                        <p>Operations Director</p>
                        <span class="mb-3 d-block">As Operations Director, Pauline not only provides the platform for the organization, she ensures it continues to work for all throughout the organization. </span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column gap-1 p-3 py-4">
                        <h3>Ben Kahura </h3>
                        <p>Head of Production</p>
                        <span class="mb-3 d-block">Director, Cinematographer, and Producer to name a few of the work Ben excels in. With more than Eighteen years in the film and video industry, Ben has worked on many projects in countries around Africa. </span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column gap-1 py-4">
                        <h3>Trizah Njuguna</h3>
                        <p>Assistant Head of Production</p>
                        <span class="mb-3 d-block">Trizah’s other name is “storyteller.” She is passionate about social impact storytelling, </span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column py-4">

                        <h3>Kadzo Denje </h3>
                        <p>Assistant HOD Crew </p>
                        <span class="mb-3 d-block">Kadzo Denje is a photographer with an eye for bringing beauty to the seemingly mundane.</span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column py-4">
                        <h3>Stanley Wangewa </h3>
                        <p>HOD Crew</p>
                        <span class="mb-3 d-block">Stanley is a veteran behind the camera. Since 2005, Stanley has been bringing stories to life visually as a cameraperson and cinematographer. </span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column py-4">
                        <h3>Francis Mbugua </h3>
                        <p>HOD Editing</p>
                        <span class="mb-3 d-block">Francis is a seasoned senior video editor and post-production lead with close to a decade of experience. </span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column py-4">
                        <h3>Eunice Wambui </h3>
                        <p>Assistant HOD Editing</p>
                        <span class="mb-3 d-block">Eunice is a driven, dedicated, multi-talented video editor with more than a decade of expertise in her field. </span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card overflow-hidden p-2 h-100">
                     <div class="card-image overflow-hidden">
                        <img src="images/team-placeholder.jpg" alt="leadership-banner" />
                     </div>
                     <div class="content_holder d-flex flex-column py-4">
                        <h3>Aziza Mwinyi </h3>
                        <p>HOD Client Relations</p>
                        <span class="mb-3 d-block">Aziza is a committed and a proactive professional specializing as a client service executive and video editor. </span>
                        <a href="#">View Profile</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="pb-5 feedback mb-5">
         <div class="container">
            <div class="row">
               <div class="col-12 card h-0 p-5 shape-bg">
                  <div class="row pb-5">
                     <div class="col-12 title-holder pb-4 text-center">
                        <h2>Our <span>Partners</span></h2>
                     </div>
                     <div class="col-12 partner-holder pb-5 d-flex flex-column">
                        <ul class="d-flex justify-content-between align-items-center">
                           <li class="text-center w-100"><a href="#" target="_blank"><img
                                    src="images/partners/safricom.png" alt="TEK Safaricom" /></a></li>
                           <li class="text-center w-100">
                              <a href="#" target="_blank"><img src="images/partners/mpesa.png" alt="TEK Safaricom" /></a>
                           </li>
                           <li class="text-center w-100">
                              <a href="#" target="_blank"><img src="images/partners/mpesa-foundation.png"
                                    alt="TEK Safaricom" /></a>
                           </li>
                        </ul>
                        <ul class="d-flex justify-content-between align-items-center">
                           <li class="w-100 text-center"><a href="#" target="_blank"><img src="images/partners/scania.png"
                                    alt="TEK Safaricom" /></a></li>
                           <li class="w-100 text-center">
                              <a href="#" target="_blank"><img src="images/partners/crown.png" alt="TEK Safaricom" /></a>
                           </li>
                           <li class="w-100 text-center">
                              <a href="#" target="_blank"><img src="images/partners/kcb.png" alt="TEK Safaricom" /></a>
                           </li>
                           <li class="w-100 text-center">
                              <a href="#" target="_blank"><img src="images/partners/kwl.png" alt="TEK Safaricom" /></a>
                           </li>
                        </ul>
                        <ul class="d-flex justify-content-between align-items-center">
                           <li class="w-100 text-center"><a href="#" target="_blank"><img src="images/partners/huawei.png"
                                    alt="TEK Safaricom" /></a></li>
                           <li class="w-100 text-center">
                              <a href="#" target="_blank"><img src="images/partners/national-bank.png"
                                    alt="TEK Safaricom" /></a>
                           </li>
                           <li class="w-100 text-center">
                              <a href="#" target="_blank"><img src="images/partners/ogilvy.png" alt="TEK Safaricom" /></a>
                           </li>
                        </ul>
                     </div>
                  </div>
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
                        <li><a href="#">Our History</a></li>
                        <li><a href="#">Who we Are</a></li>
                        <li><a href="#">The Team</a></li>
                     </ul>
                  </div>
                  <div class="item w-100">
                     <h6>Our Services</h6>
                     <ul class="p-0">
                        <li><a href="#">Film’s </a></li>
                        <li><a href="#">Documentaries</a></li>
                        <li><a href="#">Live Coverage</a></li>
                        <li><a href="#">Photography</a></li>
                     </ul>
                  </div>
                  <div class="item w-100">
                     <h6>Our Work</h6>
                     <ul class="p-0">
                        <li><a href="#">Case Studies</a></li>
                        <li><a href="#">Testimonials</a></li>
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