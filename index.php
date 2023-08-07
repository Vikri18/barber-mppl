<?php include_once("function/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Barber - Barbers & Hair Cutting</title>
  <meta name="title" content="Barber - Barbers & Hair Cutting">
  <meta name="description" content="">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap" rel="stylesheet">


  <!-- 
    - flaticon
  -->
  <link rel="stylesheet" href="assets/css/flaticon.min.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">



    <div class="header-bottom" data-header>
      <div class="container">

        <a href="#" class="logo">
          Barber
          <span class="span">Hair Salon</span>
        </a>

        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#services" class="navbar-link" data-nav-link>Services</a>
            </li>

            <li class="navbar-item">
              <a href="#pricing" class="navbar-link" data-nav-link>Pricing</a>
            </li>

            <li class="navbar-item">
              <a href="#gallery" class="navbar-link" data-nav-link>Gallery</a>
            </li>

            <li class="navbar-item">
              <a href="#appointment" class="navbar-link" data-nav-link>Appointment</a>
            </li>

            <li class="navbar-item">
              <a href="#" class="navbar-link" data-nav-link>Contact</a>
            </li>

          </ul>
        </nav>

        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="auth/index-login.php" class="btn has-before">
          <span class="span">Login</span>

          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-before has-bg-image" id="home" aria-label="home" style="background-image: url('./assets/images/hero-banner.jpg')">
        <div class="container">

          <h1 class="h1 hero-title">Barbers & Hair Cutting</h1>

          <p class="hero-text">
            Sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            suspendisse
            ultrices gravida
          </p>

          <a href="#" class="btn has-before">
            <span class="span">Explore Our Services</span>

            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services" aria-label="services">
        <div class="container">

          <h2 class="h2 section-title text-center">Service We Provide</h2>

          <p class="section-text text-center">
            Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-salon"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Hair Cutting Style</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-shampoo"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Hair Washing</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-hot-stone"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Body Treatments</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-treatment"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Beauty & Spa</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-shaving-razor"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Stylist Shaving</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-hair-dye"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Multi Hair Colors</a>
                </h3>

                <p class="card-text">
                  Sit amet consectetur adipisci elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRICING
      -->

      <section class="section pricing has-bg-image has-before" id="pricing" aria-label="pricing" style="background-image: url('./assets/images/pricing-bg.jpg')">
        <div class="container">

          <h2 class="h2 section-title text-center">Awesome Pricing Plan</h2>

          <p class="section-text text-center">
            Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse
          </p>

          <div class="pricing-tab-container">

            <ul class="tab-filter">

              <li>
                <button class="filter-btn active" data-filter-btn="all">
                  <div class="btn-icon">
                    <i class="flaticon-beauty-salon" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">All Pricing</p>
                </button>
              </li>

              <li>
                <button class="filter-btn" data-filter-btn="beauty-spa">
                  <div class="btn-icon">
                    <i class="flaticon-relax" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">Beauty & Spa</p>
                </button>
              </li>

              <li>
                <button class="filter-btn" data-filter-btn="body-treatments">
                  <div class="btn-icon">
                    <i class="flaticon-massage" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">Body Treatments</p>
                </button>
              </li>

              <li>
                <button class="filter-btn" data-filter-btn="face-washing">
                  <div class="btn-icon">
                    <i class="flaticon-spa" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">Face Washing</p>
                </button>
              </li>

              <li>
                <button class="filter-btn" data-filter-btn="meditations">
                  <div class="btn-icon">
                    <i class="flaticon-yoga" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">Meditations</p>
                </button>
              </li>

              <li>
                <button class="filter-btn" data-filter-btn="shaving">
                  <div class="btn-icon">
                    <i class="flaticon-razor-blade" aria-hidden="true"></i>
                  </div>

                  <p class="btn-text">Shaving</p>
                </button>
              </li>

            </ul>

            <ul class="grid-list">

              <li data-filter="shaving">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-1.jpg" width="90" height="90" alt="Hair Cutting & Fitting" class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Hair Cutting & Fitting</h3>

                    <p class="card-text">Clean & simple 30-40 minutes</p>
                  </div>

                  <data class="card-price" value="89">$89</data>

                </div>
              </li>

              <li data-filter="shaving">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-2.jpg" width="90" height="90" alt="Shaving & Facial" class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Shaving & Facial</h3>

                    <p class="card-text">Clean & simple 30-40 minutes</p>
                  </div>

                  <data class="card-price" value="45">$45</data>

                </div>
              </li>

              <li data-filter="face-washing">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-3.jpg" width="90" height="90" alt="Hair Color & Wash" class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Hair Color & Wash</h3>

                    <p class="card-text">Clean & simple 30-40 minutes</p>
                  </div>

                  <data class="card-price" value="35">$35</data>

                </div>
              </li>

              <li data-filter="body-treatments">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-4.jpg" width="90" height="90" alt="Body Massage" class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Body Massage</h3>

                    <p class="card-text">Clean & simple 30-40 minutes</p>
                  </div>

                  <data class="card-price" value="56">$56</data>

                </div>
              </li>

              <li data-filter="beauty-spa">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-5.jpg" width="90" height="90" alt="Beauty & Spa" class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Beauty & Spa</h3>

                    <p class="card-text">Clean & simple 30-40 minutes</p>
                  </div>

                  <data class="card-price" value="27">$27</data>

                </div>
              </li>

              <li data-filter="face-washing">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-6.jpg" width="90" height="90" alt="Facial & Face Wash" class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Facial & Face Wash</h3>

                    <p class="card-text">Clean & simple 30-40 minutes</p>
                  </div>

                  <data class="card-price" value="63">$63</data>

                </div>
              </li>

              <li data-filter="body-treatments">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-7.jpg" width="90" height="90" alt="Backbone Massage" class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Backbone Massage</h3>

                    <p class="card-text">Clean & simple 30-40 minutes</p>
                  </div>

                  <data class="card-price" value="43">$43</data>

                </div>
              </li>

              <li data-filter="meditations">
                <div class="pricing-card">

                  <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                    <img src="./assets/images/pricing-8.jpg" width="90" height="90" alt="Meditation & Massage" class="img-cover">
                  </figure>

                  <div class="wrapper">
                    <h3 class="h3 card-title">Meditation & Massage</h3>

                    <p class="card-text">Clean & simple 30-40 minutes</p>
                  </div>

                  <data class="card-price" value="74">$74</data>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #GALLERY
      -->

      <section class="section gallery" id="gallery" aria-label="photo gallery">
        <div class="container">

          <div class="title-wrapper">

            <div>
              <h2 class="h2 section-title">Latest Photo Gallery</h2>

              <p class="section-text">
                Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua
                suspendisse
              </p>
            </div>

            <a href="#" class="btn has-before">
              <span class="span">Explore More Gallery</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <ul class="grid-list">

            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="./assets/images/gallery-1.jpg" width="422" height="550" loading="lazy" alt="Hair Cutting" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Hair Cutting</h3>

                  <p class="card-text">Barbers & Salon Services</p>

                  <a href="#" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="./assets/images/gallery-2.jpg" width="422" height="550" loading="lazy" alt="Hair Cutting" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Hair Cutting</h3>

                  <p class="card-text">Barbers & Salon Services</p>

                  <a href="#" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="./assets/images/gallery-3.jpg" width="422" height="550" loading="lazy" alt="Hair Cutting" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Hair Cutting</h3>

                  <p class="card-text">Barbers & Salon Services</p>

                  <a href="#" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="gallery-card">

                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="./assets/images/gallery-4.jpg" width="422" height="550" loading="lazy" alt="Hair Cutting" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Hair Cutting</h3>

                  <p class="card-text">Barbers & Salon Services</p>

                  <a href="#" class="card-btn" aria-label="Read more">
                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #APPOINTMENT
      -->

      <section class="section appoin" id="appointment" aria-label="appointment">
        <div class="container">

          <div class="appoin-card">

            <figure class="card-banner img-holder" style="--width: 250; --height: 774;">
              <img src="./assets/images/appoin-banner-1.jpg" width="250" height="774" loading="lazy" alt="" class="img-cover">
            </figure>

            <div class="card-content">

              <h2 class="h2 section-title">Make Appointment</h2>

              <p class="section-text">
                Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua
                suspendisse
              </p>

              <form method="post" action="pemesanan/pemesanan.php" class="appoin-form">

                <div class="input-wrapper">
                  <input type="text" name="nama" placeholder="Your Full Name" required class="input-field">

                  <input type="email" name="email_customer" placeholder="Email Address" required class="input-field">
                </div>

                <div class="input-wrapper">
                  <input type="text" name="nomor_telp" placeholder="Phone Number" required class="input-field">

                  <select name="nama_layanan" class="input-field" required>

                    <option value="">--pilih--</option>
                    <option value="CUKUR">Cukur</option>
                    <option value="WARNA RAMBUT">Warna Rambut</option>
                    <option value="PIJAT">Pijat</option>
                    <option value="SPA">SPA</option>

                  </select>
                </div>

                <input type="date" name="date" required class="input-field date">

                <textarea name="catatan" placeholder="Write Message" required class="input-field"></textarea>

                <button type="submit" class="form-btn" name="btnPesan">
                  <span class="span">Appointment Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </form>

            </div>

            <figure class="card-banner img-holder" style="--width: 250; --height: 774;">
              <img src="./assets/images/appoin-banner-2.jpg" width="250" height="774" loading="lazy" alt="" class="img-cover">
            </figure>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">
            Barber
            <span class="span">Hair Salon</span>
          </a>

          <form action="" class="input-wrapper">

            <input type="email" name="email_address" placeholder="Enter Your Email" required class="email-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe Now</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>

          </form>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Quick Links</p>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Our Services</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Meet Our Team</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Our Portfolio</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Need A Career?</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">News & Blog</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Hair Cutting</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Shaving & Design</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Hair Colors</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Beauty & Spa</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Body Massages</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Recent News</p>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 70; --height: 75;">
                  <img src="./assets/images/footer-blog-1.jpg" width="70" height="75" loading="lazy" alt="The beginners guide to Henna Brows in Brisbane" class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">The beginners guide to Henna Brows in Brisbane</a>
                  </h3>

                  <div class="card-date">
                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                    <time datetime="2022-08-25">25 August 2022</time>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 70; --height: 75;">
                  <img src="./assets/images/footer-blog-2.jpg" width="70" height="75" loading="lazy" alt="How do I get rid of unwanted hair on my face?" class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">How do I get rid of unwanted hair on my face?</a>
                  </h3>

                  <div class="card-date">
                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                    <time datetime="2022-08-25">25 August 2022</time>
                  </div>
                </div>

              </div>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Contact Us</p>
            </li>

            <li class="footer-list-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="contact-link">
                7528 Roberts Ave. Palm Bay, FL 32907
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+0123456789" class="contact-link">+62 888 777 666 55</a>
            </li>

            <li class="footer-list-item">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <span class="contact-link">Sun - Friday, 08 am - 09 pm</span>
            </li>

            <li class="footer-list-item">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <a href="mailto:support@gmail.com" class="contact-link">barber@info.com</a>
            </li>

          </ul>

        </div>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2023 <a href="#" class="copyright-link">Barbershop</a>. All Rights Reserved.
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>