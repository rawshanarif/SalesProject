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
      <title>Palpatine Electronics</title>

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
      <script src="/SalesProject/Javascript/data.js"></script>
      <script src="/SalesProject/Javascript/index.js"></script>
</head>
<body>
      <div class="my-container">

            <!-- NAVIGATION STARTS -->

            <div class="nav">
                  <div class="menu-open">
                        <ion-icon name="menu"></ion-icon>
                  </div>
                  <div class="brand">
                        <span><a id="testHomePageHeading" href="index.html">Palpatine Electronics</a></span>
                  </div>
                  <div class="cart">
                        <ion-icon name="cart"></ion-icon>
                  </div>
                  <div class="menu">
                        <div class="menu-close">
                              <ion-icon name="close"></ion-icon>
			</div>
			                 <ul>
                                <li><a href="index.php">The Empire</a></li>
                                <li><a href="about.php">Story of the Dark Side</a></li>
                                <li><a href="contact.php">Contact The Sith Lords</a></li>
                                <li><a href="table.php">Sith Lord Information</a></li>
                             </ul>
			<a href="http://35.243.130.79/databasepj/SalesProject/temp.php">Logout</a>
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

            <!-- HERO SECTION STARTS -->

            <div class="hero-section">
                  <div class="container-fluid">
                        <div class="row">
                              <div class="col-lg-6 hero-left">
                                    <div class="tagline">
                                          <p class="wow fadeInUp">One-Stop Shop for Sith Lords- <br> Lightsabers, Star Ships, and <br> Apprenticeships and more.</p>
                                    </div>

                                    <div class="shipping">
                                          <p id="caption" class="wow fadeInUp" data-wow-delay="0.5s">Complimentary General Grievous arms on U.S. orders $30+</p>
                                    </div>
                              </div>

                              <div class="col-lg-6 hero-right">
                                    <div class="hero-image">
                                          <img src="images/hero.jpg" class="img wow fadeInUp" data-wow-delay="0.3s" alt="">
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- HERO SECTION ENDS -->

            <!-- PRODUCT LIST STARTS -->

            <div class="section prod-list">
                  <div class="container-fluid">
                        <div class="row some-cards">
                              <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                                    <form action="increment.php" method="post">
                                          <p id="price">$3,000</p>
					  <input type="text" id="price" name="price" value="3000" style="display: none">
					  <img src="images/deathstar.jpg" alt="">
                                          <button class="btn">Purchase</button>
                                          <p id="prod-desc" name="deathstar" value="deathstar">Deathstar</p>
                                   	<input type="text" id="product" name="product" value="deathstar" style="display: none">
                                          
                                          </form>
                                    
                              </div>
                              <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.8s">
                                    <form action="increment.php" method="post">
					  <p id="price">$2,000</p>
                                          <input type="text" id="price" name="price" value="2000" style="display: none">
                                          <img src="images/stardd.jpg" alt="">
                                          <button class="btn">Purchase</button>
                                     <p id="prod-desc" name="stardestroyer" value="stardestroyer">Star Destroyer</p>
                                        <input type="text" id="product" name="product" value="stardestroyer"  style="display: none">
                                     </form>
                              </div>
                              <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.1s">
                                          <form action="increment.php" method="post">                                                      
					  <p id="price">USD $10.00</p>
                                          <input type="text" id="price" name="price" value="10" style="display: none">
					  <img src="images/prod-06.jpg" alt="">
                                          <button class="btn">Purchase</button>
                                          <p id="prod-desc">Daily Planner 2019 in Brown</p>
                                          <input type="text" id="product" name="product" value="DailyPlanner"  style="display: none">
                             </form> </div>
                              <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="1.4s">
                                   <form action="increment.php" method="post">
					  <p id="price">USD $25.00</p>
                                          <input type="text" id="price" name="price" value="25" style="display: none">
					  <img src="images/prod-07.jpg" alt="">
                                          <button class="btn">Purchase</button>
					  <p id="prod-desc">Daily Planner 2017 in Dark Brown</p>
                                        <input type="text" id="product" name="product" value="DailyPlannerDB"  style="display: none">
                                   </form> 
                              </div>
                        </div>
                  </div>
            </div>

            <!-- PRODUCT LIST ENDS -->

            <!-- BANNER SECTION STARTS -->

            <div class="row prod-sec">
                  <div class="col-lg-6 prod-img">
                        <img src="images/mandalorian.jpg" alt="">
                  </div>

                  <div class="col-lg-4 prod-desc">
                        <br><br>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">“Give yourself to the Dark Side. It is the only way you can save your friends"<br>- Darth Vader</p>

                        
                  </div>
            </div>

            <!-- BANNER SECTION ENDS -->

            <!-- CATEGORIES SECTION STARTS -->

            <div class="container-fluid">
                  <div class="row section shop">
                        <div class="col-lg-8">
                              <p class="wow fadeInUp" data-wow-delay="0.4s">The Dark Side is guaranteed for you to lose y</p>
                              </div>
                  </div>

                  <div class="container-fluid">
                        <div class="row some-cards">
                              <div class="col-lg-3"></div>

                              <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="images/prod-01.jpg" alt="">
                                    <p id="prod-desc">Free Storm Trooper Helmet with each purchase of a Deathstar(Storm Trooper Helmet may decrease aim ability)!</p>
                              </div>

                              <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.5s">
                                    <img src="images/prod-02.jpg" alt="">
                                    <p id="prod-desc">Top of the line lightsabers! Guaranteed to kill withstand any rebel Jedi (except Baby Yoda)!</p>
                              </div>

                              <div class="col-lg-3 prod wow fadeInUp" data-wow-delay="0.7s">
                                    <img src="images/prod-03.jpg" alt="">
                                    <p id="prod-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, voluptas nulla illum!</p>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- CATEGORIES SECTION ENDS -->

            <br><br><br>

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


?>
