<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>D4U</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      .panel p{
          display: none;
      }
  </style>
  <script>
      var id2;
      var f=0;
      var flag=0;
  function display(id)
  {
     if(f==0)
      {
          id2=id;
            $(".panel"+id).show(1000);
            f=1;
      }
      else
      {
          if(id==id2)
          {
            $(".panel"+id).hide(1000);
          }
          else
          {
            $(".panel"+id2).hide(1000);
            $(".panel"+id).show(1000);
            id2=id;
          }
      }
  }
  function dispdiv()
  {
     if(flag==0)
      {
      $("#collapse").show(2000);
      document.getElementById("read").innerHTML="Read Less";
      flag=1;
      }
      else
      {
       $("#collapse").hide(2000);
      document.getElementById("read").innerHTML="Read More";
      flag=0;
      }
      
  }
  </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#faqs">FAQs</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="assets/D4U.pdf" traget="_parent">Rate sheet</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login.php" class="get-started-btn scrollto">Login / Sign up</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Go Beyond With Us<span>.</span></h1>
          <h2>We are team of Delivery 4 you</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
              <i ><img src="assets/img/services/key1.png"></i>
            <h3><a>Pickup across Kerala</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
              <i><img src="assets/img/services/key2.png"></i>
            <h3><a>Online Payment</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i><img src="assets/img/services/key3.png"></i>
            <h3><a>Doorstep Pickup</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i><img src="assets/img/services/key5.png"></i>
            <h3><a>Tracking on the Go</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i><img src="assets/img/services/key6.png"></i>
            <h3><a>Schedule a pickup 
                    <br>(Option for future date )</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Delivery 4 You.</h3>
            <p class="fst-italic">
              Our story began in 2020 as a small courier delivery service company with big ambitions 
              and bigger dreams. Our vision was to not just build a business, but to build enduring 
              and close ties with our customers, while offering them a broad range of services. 
              
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Efficient and safe delivery of your consignments.</li>
              <li><i class="ri-check-double-line"></i> Hand-carrying valuable documents without any delay.</li>
              <li><i class="ri-check-double-line"></i> We are offering Proof of Deliveries (POD) at your request.</li>
            </ul>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <!--<section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box"  style="width: 100%;">
              <div ><i><img src="assets/img/services/key1.png"></i></div>
              <h4><a>Pickup across kerala</a></h4>
              <p>Pickup your courier across kerala and send to the location of Your choice</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box"  style="width: 100%;">
              <div ><i><img src="assets/img/services/key2.png"></i></div>
              <h4><a>Online payment</a></h4>
              <p>You can easily pay the amount at online</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box"  style="width: 100%;">
              <div ><i><img src="assets/img/services/key3.png"></i></div>
              <h4><a>Doorstep pickup</a></h4>
              <p>Pickup your courier from your home</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box"  style="width: 100%;">
              <div ><i><img src="assets/img/services/key5.png"></i></div>
              <h4><a>Tracking on the go</a></h4>
              <p>Tracking of the location of your courier</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box" style="width: 100%;">
              <div ><i><img src="assets/img/services/key6.png"></i></div>
              <h4><a>Shedule a pickup(Option for future date)</a></h4>
              <p>Shedule a pickup date and time</p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= 
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= 
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= 
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
   <!-- <section id="feedback">
        <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Customer Feedback</h2>
            <p>What People say about us...</p>
        </div>

        <div class="row">
         
            
            <div class="service_area">
               
               <div class="col-lg-12 row" style="margin-bottom: 10px;">
                  <div class="col-lg-6 col-xs-12 pad0">
                     <div class="review_block" style="border: 2px solid #ffc450;border-radius: 55px;padding: 6%;text-align: center;">
                         <div class="delay-03s animated wow  zoomIn animated" style="visibility: visible; animation-name: zoomIn;"> <img src="assets/img/rew1.png" alt="" style="border-radius: 50%;"> </div>
                        <h3 class="animated fadeInUp wow animated" style="visibility: visible; animation-name: fadeInUp;">From a delighted customer</h3>
                        <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 rewtxt">
                           <p class="animated fadeInDown wow animated" style="visibility: visible; animation-name: fadeInDown;">Thank you for your kind support. Well done customer service executives! At last you understood my situation and I'm really thankful and respect the pickup boy. Even during heavy rain, he pickedup the item. Glad if you guys can say my regards &amp; thanks to the pickup guy.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1  col-xs-10 col-xs-offset-1 ">
                            <span class="fa fa-star checked" style="color: red"></span>
                           <span class="fa fa-star checked" style="color: red"></span>
                           <span class="fa fa-star checked" style="color: red"></span>
                           <span class="fa fa-star checked" style="color: red"></span>
                           <span class="fa fa-star checked" style="color: red"></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-xs-12 pad0">
                     <div class="review_block" style="border: 2px solid #ffc450;border-radius: 55px;padding: 6%;text-align: center;">
                         <div class="delay-03s animated wow  zoomIn animated" style="visibility: visible; animation-name: zoomIn;"> <img src="assets/img/rew1.png" alt="" style="border-radius: 50%;"> </div>
                        <h3 class="animated fadeInUp wow animated" style="visibility: visible; animation-name: fadeInUp;">From a happy customer</h3>
                        <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1  rewtxt">
                           <p class="animated fadeInDown wow animated" style="visibility: visible; animation-name: fadeInDown;">Very Good initiative by Team D4U in providing easy facility keeping Customer Centricity in mind. Excellent Website, hassle free pickup &amp; on-time delivery. Real sense of digitalization in terms of serviceability, rate calculations with pickup &amp; delivery.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 ">
                           <span class="fa fa-star checked" style="color: red"></span>
                           <span class="fa fa-star checked" style="color: red"></span>
                           <span class="fa fa-star checked" style="color: red"></span>
                           <span class="fa fa-star checked" style="color: red"></span>
                           <span class="fa fa-star checked"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>-->
    
    <!-- End Testimonials Section -->
<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our website creating Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                  <img src="assets/img/team/Arathy.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Arathy Sivakumar</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                  <img src="assets/img/team/Geethanjali.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Geethanjali K P</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                  <img src="assets/img/team/Keerthana.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Keerthana K V</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                  <img src="assets/img/team/vineetha.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Vineetha P</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- ======= Team Section ======= -->
    <section id="faqs" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>FAQs</h2>
          <p>Most Important FAQs</p>
        </div>

        <div class="row">

          <div class="service_area">
              <button class="accordion" onclick="display(1)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px ">
                  How do I register to the website?
              </button>
               <div class="panel">
                  <p class="panel1">You can register on D4U using your email, and providing few basic personal 
                      details such as name, email, &amp; phone number.</p>
               </div>
               <button class="accordion" onclick="display(2)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                   How can I use D4U website for scheduling pickup?
               </button>
               <div class="panel">
                  <p class="panel2">Initiate a pickup request by filling in your package and other important 
                      details. After  scheduling the pickup &amp; successful registry, our field executives 
                      will be aligned to pick up the parcel from your address as per the agreed/ chosen timings.
                  </p>
               </div>
               <button class="accordion" onclick="display(3)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                   How do I arrange a pickup?
               </button>
               <div class="panel">
                  <p class="panel3">Our executives can  to facilitate the pickup request. He will coordinate 
                      with you over the phone before attempting the pickup. Our executive will come to your 
                      pickup address on the selected day as per your availability and process the order request.</p>
               </div>
               <button class="accordion" onclick="display(4)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                   Where do I find the Label &amp; What do I do with it?
               </button>
               <div class="panel">
                  <p class="panel4">
                      The label can be accessed through the ‘My booking section’ of the app &amp; also from the email 
                      sent after registering the pick up. The label would be printed and brought to you by the biker.
                      You do not need to take a printout of the shipping label
                  </p>
               </div>
               <!--<div id="collapse" style="display:none">
                  <button class="accordion" onclick="display(5)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      How to cancel my pick up/drop-off request?
                  </button>
                  <div class="panel">
                     <p class="panel5">It can be cancelled by going to the ‘Bookings’ section on the app home page, 
                         and then selecting ‘Cancel My Request’. Once you raise a request for cancellation, it will 
                         be sent to the relevant team for approval. A representative will call you to get your feedback 
                         and process the cancellation &amp; refund. Once approved, you will receive a cancellation email.
                         The SLA for receiving the refund money is 10-15 working days as per the payment gateway 
                         standards. Cancellation will not be possible if the shipment has been booked at the branch.</p>
                  </div>
                  <button class="accordion" onclick="display(6)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      How to reschedule my pickup request?
                  </button>
                  <div class="panel">
                     <p class="panel6">As of now, we do not have the option to reschedule, however, you can always cancel
                         the order and place a new request, as described above.
                     </p>
                  </div>
                  <button class="accordion" onclick="display(7)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      What are the services that can be availed in MyDTDC?
                  </button>
                  <div class="panel">
                     <p class="panel7">You could choose any services like PTP, Premium, Priority, and Standard that are 
                         available for your origin - destination addresses. All services have different pricing and 
                         delivery SLAs.</p>
                  </div>
                  <button class="accordion" onclick="display(8)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      What are the packaging guidelines?
                  </button>
                  <div class="panel">
                     <p class="panel8">We are not currently providing the packaging services. The packaging has to be 
                         done by the end customer. A parcel moves through various hands &amp; check points, both within 
                         &amp; out of DTDC's line of control (Airlines/ loaders etc). Hence, we strongly recommend that 
                         you use sturdy, transit worthy packaging materials suitable for the parcel, to avoid any damage 
                         to the inner contents. Please note that in case of any damage caused to the parcel due to poor 
                         packaging, DTDC will not assume liability of compensation for such damages or loss.</p>
                  </div>
                  <button class="accordion" onclick="display(9)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      What kind of items can I ship through DTDC?
                  </button>
                  <div class="panel">
                     <p class="panel9">We accept most types of documents. For parcels which are non-documents, 
                         you are requested to send only the content types that are listed in the app. DTDC allows booking
                         of various types of shipments but restricts a few due to legal and technical conditions. The 
                         restricted items have been listed under Terms &amp; Conditions, separately for domestic and 
                         international consignments.</p>
                  </div>
                  <button class="accordion" onclick="display(10)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      When will my order be picked up?
                  </button>
                  <div class="panel">
                     <p class="panel10">Your order will be picked up at the scheduled time, i.e. the time which you 
                         select during the booking.</p>
                  </div>
                  <button class="accordion" onclick="display(11)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      How do I track my shipment?
                  </button>
                  <div class="panel">
                     <p class="panel11">A shipment, once booked in our system, will have a unique numeric or alpha 
                         numeric number, called the consignment number/ AWB number (based on the service chosen). 
                         You may track a shipment using this number on the app - by going to the "Booking" section on 
                         the homepage or on our website (<a href="https://www.dtdc.in/" target="_blank">www.dtdc.in</a>).
                     </p>
                  </div>
                  <button class="accordion" onclick="display(12)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      My Payment was deducted but order was not placed. What should I do?
                  </button>
                  <div class="panel">
                     <p class="panel12">
                         Please drop an email to <a href="mailto:customersupport@dtdc.com">customersupport@dtdc.com</a> 
                         with the details: 1. Registered Email ID, 2. Order ID, 3. Amount deducted, 4. Time of 
                         transaction. We will process the refund for you.</p>
                  </div>
                  <button class="accordion" onclick="display(13)" style="background-color: #eee;color: #444;cursor: pointer;padding: 10px 20px;width: 100%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px">
                      What happens when the actual weight of the shipment is higher than what you have entered 
                      during booking?
                  </button>
                  <div class="panel">
                     <p class="panel13">A customer representative will reach out to you mentioning that the weight or 
                         dimensions were found to be higher than what was mentioned during booking. If we find that any
                         differential amount is required to be paid, he will take your consent on whether you want to pay.
                         If you agree, a payment link will be generated on your email ID. If you are not willing to pay 
                         and want the shipment back, the shipment would be returned to you, and the booking cancelled, 
                         refunding you the booking amount.</p>
                  </div>
               </div>
               <div class="col-lg-12 redmr" style="margin: 20px 0px; border-top: #ccc solid 1px;text-align: center;">
                   <button onclick="dispdiv()"id="read" style="background-color: #ffc451;color: #444;cursor: pointer;padding: 10px 20px;width: 50%;border: none;text-align: left;outline: none;font-size: 15px;transition: 0.4s;margin-top:10px" >Read More</button>
               </div>-->
            </div></div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <!--<div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>-->

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>No 8/384 Abbas Arcade, Perumbillissery, Cherpu, Thrissur - 680561, Near Bus Stop Perumbillissery</p>
              </div>

            </div>

          </div>
        <div class="col-lg-4">
            <div class="info">
              

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>d4u2022@gmail.com</p>
              </div>

             

            </div>

          </div>
            <div class="col-lg-4">
            <div class="info">
              

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 8848095741</p>
              </div>

            </div>

          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">

            
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>D4U<span>.</span></h3>
              <p>
                No 8/384 Abbas Arcade, Perumbillissery, Cherpu, Thrissur - 680561, Near Bus Stop Perumbillissery<br><br>
                <strong>Phone:</strong> +91 8848095741<br>
                <strong>Email:</strong> d4u2022@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
             <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faqs">FAQs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
           <!-- <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>-->
          </div>

         <!-- <div class="col-lg-4 col-md-6  footer-newsletter">
            <h4>Feedback</h4>
            <p></p>
            <form action="" method="post">
                <input type="email" name="feesback"><input type="submit" value="Subscribe">
            </form>
           
          </div>-->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>D4U</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">KAGV Group</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-2.1.0.min.js"></script>

</body>

</html>