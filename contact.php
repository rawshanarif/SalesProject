<?php
session_start();

if ($_SESSION['logged_in'] == TRUE) {
//print_r($_SESSION);
} else {
    echo "<font color='red'>Error, you are not logged in!</font>";
   header("Location: login.php");

 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="harrnish - ig@harrnish">
      <link rel="icon" href="yourIconUrl" type="image/gif" sizes="16x16">
      <title>Contact</title>

      <!-- external stylesheet -->
      <link rel="stylesheet" href="style.css">

      <!-- bootstrapcdn -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- icon pack -->
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

      <!-- google font -->
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

      <!-- jquery cdn -->
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

      <!-- tweenmax (greensock) cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="animate.css">
      <script src="wow.min.js"></script>
</head>
<body>
      <div class="contact-container">

            <!-- NAVIGATION STARTS -->

            <div class="nav">
                  <div class="menu-open">
                        <ion-icon name="menu"></ion-icon>
                  </div>
                  <div class="brand">
                        <span><a href="index.html">Palpatine Electronics</a></span>
                  </div>
                  <div class="cart">
                        <ion-icon name="cart"></ion-icon>
                  </div>
                  <div class="menu">
                        <div class="menu-close">
                              <ion-icon name="close"></ion-icon>
                        </div>
                        <ul>
                              <li><a href="index.html">The Empire</a></li>
                              <li><a href="shop.html">Jedi Collection</a></li>
                              <li><a href="product.html">Darth Products</a></li>
                              <li><a href="about.html">Story Of The Dark Side</a></li>
                              <li><a href="contact.html">Are you a Sith Lord? Contact Us</a></li>
                              <li><a href="index.html">Jedi Customer Purchases</a></li>
                        </ul>
                        <div class="media-menu">
                              <ul>
                                    <li><ion-icon name="logo-facebook"></ion-icon></li>
                                    <li><ion-icon name="logo-instagram"></ion-icon></li>
                                    <li><ion-icon name="logo-twitter"></ion-icon></li>
                                    <li><ion-icon name="logo-pinterest"></ion-icon></li>
                              </ul>
                        </div>
                  </div>
            </div>

            <!-- NAVIGATION ENDS -->

            <!-- DATA SECTION STARS -->

            <div class="about-hero">
                  <div class="container-fluid hero wow fadeInUp">
                        <h1 id="hero-title">Contact us</h1>
                  </div>

                  <div class="container content">
                        <p class="wow fadeInUp">If we haven't met your dark sided needs and want to file a complaint, or if we did a great job helping you dominate the rebels, please let us know with the form below.</p>

                        <form>
                              <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control wow fadeInUp" data-wow-delay="0.5s">
                              </div>

                              <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                              </div>

                              <div class="form-group">
                                    <label>Message</label>
                                    <textarea rows="3" class="form-control wow fadeInUp" data-wow-delay="0.8s"></textarea>
                              </div>

                              <div class="add-prod wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="#">SUBMIT</a>
                              </div>
                        </form>

                  </div>
            </div>

            <!-- DATA SECTION ENDS -->

            <!-- FOOTER STARTS -->

            <div class="container-fluid footer">
                  <div class="section container">
                        <footer>
                              <div class="row">
                                    <div class="col-lg-3 block">
                                          <p>SITH HQ, 1977 Jedi Way
                                          <br>
                                          Coruscant, The Universe.
                                          <br>
                                          </p>
                                    </div>
                                    <div class="col-lg-3 block">
                                          <p>FAQs
                                          <br>
                                          Return Policy
                                          <br>
                                          Intergalactic Shipping</p>
                                    </div>
                                    <div class="col-lg-3 block">
                                          <p>Careers
                                          <br>
                                          Community
                                          <br>
                                          Wholesale</p>
                                    </div>
                                    <div class="col-lg-3 block">
                                          <div class="media">
                                                <ul>
                                                      <li><ion-icon name="logo-facebook"></ion-icon></li>
                                                      <li><ion-icon name="logo-instagram"></ion-icon></li>
                                                      <li><ion-icon name="logo-twitter"></ion-icon></li>
                                                      <li><ion-icon name="logo-pinterest"></ion-icon></li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                        </footer>
                  </div>
            </div>

            <!-- FOOTER ENDS -->
            </div>

            <script type="text/javascript">

            //Scroll reveal animations

            new WOW().init();

            //Scroll activated background change
            $(function() {
                  $(document).scroll(function() {
                        var $nav = $(".nav");
                        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                  });
            });

            //Toggle MENU

            var t1 = new TimelineMax({paused: true});
            t1.to(".menu", 0.5, {
                  left: "0%",
                  ease: Power2.easeInOut
            });

            t1.reverse();
            $(document).on("click", ".menu-open", function() {
                  t1.reversed(!t1.reversed());
            });
            $(document).on("click", ".menu-close", function() {
                  t1.reversed(!t1.reversed());
            });

            </script>
</body>
</html>
