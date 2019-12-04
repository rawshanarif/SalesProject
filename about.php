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
      <title>Story of the Dark Side</title>

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
      <div class="about-container">

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
                              <li><a href="about.html">Story of the Dark Side</a></li>
                              
                              
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

            <!-- DATA SECTION STARTS -->

            <div class="about-hero">
                  <div class="container-fluid hero wow fadeInUp">
                        <h1 id="hero-title">Story of the Dark Side</h1>
                  </div>

                  <div class="container content">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure natus possimus, maiores officiis quibusdam suscipit rerum velit explicabo veritatis excepturi vel ab doloribus aliquid rem labore incidunt, odio quas. Excepturi voluptatem, autem rem odio blanditiis, sint cupiditate? Fugiat facere cum quidem dignissimos ipsum rem quibusdam nobis quia non provident, optio.</p>

                        <p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure natus possimus, maiores officiis quibusdam suscipit rerum velit explicabo veritatis excepturi vel ab doloribus aliquid rem labore incidunt, odio quas. Excepturi voluptatem, autem rem odio blanditiis, sint cupiditate? Fugiat facere cum quidem dignissimos ipsum rem quibusdam nobis quia non provident, optio.</p>

                        <p id="blockquote" class="wow fadeInUp" data-wow-delay="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias labore enim dolor hic iusto.</p>

                        <p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure natus possimus, maiores officiis quibusdam suscipit rerum velit explicabo veritatis excepturi vel ab doloribus aliquid rem labore incidunt, odio quas. Excepturi voluptatem, autem rem odio blanditiis, sint cupiditate? Fugiat facere cum quidem dignissimos ipsum rem quibusdam nobis quia non provident, optio.</p>
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
                                          <p>Sith Careers
                                          <br>
                                          Dark SideCommunity
                                          <br>
                                          Jedi Wholesale</p>
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