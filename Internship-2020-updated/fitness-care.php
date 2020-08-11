<?php
include 'configmain.php';
require_once('checkSession.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness.care</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
  <link href="CSS/Fitness-care.css" type="text/css" rel="Stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
   <link href="CSS/dropdown.css" type="text/css" rel="Stylesheet" />
</head>

<body>
  <section id="hero">
    <header>
      <div class="container1">
        <div id="header-logo-mobile" class="top-gym-logo">
          <a href="#">FItness<br />Club</a>
        </div>
        <nav>
          <ul class="flex">
            <li><a href="home.php">Home</a></li>
            <!--<li><a href="#">About Us</a></li>-->
            <li><a href="mind-care.php">Mind.care</a></li>
             <li><a href="fitness-care.php">Fit.care</a></li>
            <li id="header-logo" class="top-gym-logo">
              <a href="#">Fitness<br />Club</a>
            </li>
           
            <li><a href="diet-care.php">Diet.care</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li>
              <div class="dropdown" id="dropdown">
                <button class="dropbtn" onclick="myFunction()">Hey <span id="cg"></span>!
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                  <a href="logout.php">Logout</a>
                  <a href="#">About us</a>
                  <!-- <a href="#">Link 3</a> -->
                </div>
              </div>
              <div class="login" id="login">
                <a href="login.php" class="movetologin">Login</a>
              </div>
            </li>
            <!--<li>-->
            <!--  <button id="search"><span class="fa fa-search"></span></button>-->
            <!--</li>-->
          </ul>
        </nav>

        <button id="hamburger-menu">
          <span class="strip"></span>
          <span class="strip"></span>
          <span class="strip"></span>
        </button>
      </div>
    </header>
  </section>

  <section class="intro">
    <div class="leftin">
        <h1 >BE FIT.BE CURE.EAT WELL</h1>
        <p>At Fitness-care we provide variety of workouts with video tutorials
          which energize and build fitness with fun.</p>
    </div>
    <!-- Image swiper  -->
    <!-- <div class="rightin">
      <div class="gallery-wrap wrap-effect-1">
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
      </div>         
    </div>         -->
    <div class="rightin">
      <!-- <div class="card"><img src="Images/upper body.png" alt=""></div>
      <div class="card"><img src="Images/info3.png" alt=""></div>

      <div class="card"><img src="Images/info3.png" alt=""></div>
      <div class="card"><img src="Images/upper body.png" alt=""></div>          -->

      <!-- swiper -->
      <div class="gallery-wrap wrap-effect-1">
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
      </div>
  </div>

  </section>

<!-- buttons to select what user wants to have the tutorials or packs   -->

  <div style="display: flex; justify-content: center;align-items: center;">
    <button id="btnClick1" class="buttonClass">Tutorials</button>
    <button id="btnClick2" class="buttonClass btncolor">Packs</button>
    
    <hr>
</div>

  <section  class="main commonForAll" class="commonForAll"  >
    <h3 style="color: black; letter-spacing: 5px;">workout Packs</h3>
    <h3 class="headingcommon"> Fat burn</h3>
    <div class="bottom">
        <div class="cardmain">
           <a href="fat-burn-card-1.php"> <div class="up">
                <img src="Images/fat3.png" alt="">
            </div>
            <div class="down">
                <h3>General Fat loss</h3>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                        dignissimos minima!</p>
            </div></a>
        </div>

        <div class="cardmain">
            <a href="fat-burn-card-2.php"><div class="up">
                <img src="Images/fat1.jpg" alt="">
            </div>
            <div class="down">
                <h3>Intermediate fat loss</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                        dignissimos minima!</p>
            </div></a>
        </div>

        <div class="cardmain">
            <a href="fat-burn-card-3.php"><div class="up">
                <img src="Images/run1.jpg" alt="">
            </div>
            <div class="down">
                <h3>Advance Fat Loss</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                    dignissimos minima!</p>
            </div></a>
        </div>
      </div>
  </section>

  <section id="bellyfat" class="commonForAll">
    <h3 class="headingcommon"> Arm Workout</h3>
      <div class="bottom">
        <div class="cardmain">
           <a href="fat-burn-card-1.php"> <div class="up">
                <img src="Images/arm2.png" alt="">
            </div>
            <div class="down">
                <h3>Beginner</h3>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                        dignissimos minima!</p>
            </div></a>
        </div>

        <div class="cardmain">
            <a href="fat-burn-card-2.php"><div class="up">
                <img src="Images/arm .png" alt="">
            </div>
            <div class="down">
                <h3>Intermediate</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                        dignissimos minima!</p>
            </div></a>
        </div>

        <div class="cardmain">
            <a href="fat-burn-card-3.php"><div class="up">
                <img src="Images/arm1.jpg" alt="">
            </div>
            <div class="down">
                <h3>Advanced</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                    dignissimos minima!</p>
            </div></a>
        </div>
    </div>
  </section>
   
  <section id="coreworkout" class="commonForAll">
    <h3 class="headingcommon"> core workout</h3>
      <div class="bottom">
        <div class="cardmain">
           <a href="#"> <div class="up">
                <img src="Images/core1.png" alt="">
            </div>
            <div class="down">
                <h3>Beginner</h3>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                        dignissimos minima!</p>
            </div></a>
        </div>

        <div class="cardmain">
            <a href="#"><div class="up">
                <img src="Images/core2.png" alt="">
            </div>
            <div class="down">
                <h3>Intermediate</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                        dignissimos minima!</p>
            </div></a>
        </div>

        <div class="cardmain">
            <a href="#"><div class="up">
                <img src="Images/core3.png" alt="">
            </div>
            <div class="down">
                <h3>Advanced</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                    dignissimos minima!</p>
            </div></a>
        </div>
    </div>
  </section>


  <section id="trainers" class="commonForAll">
    <h5>The Best</h5>
    <h3>Trainers</h3>
    <div class="container1">
      <div id="trainers-slider">
        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-1.jpg"
            alt="Rachel Smith Personal Trainer" />
          <h4>Rachel Smith</h4>
          <p>Aerobics Instructor</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-2.jpg" alt="Nick Andros Personal Trainer" />
          <h4>Nick Andros</h4>
          <p>Pilates Instructor</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-3.jpg"
            alt="Larry Underwood Personal Trainer" />
          <h4>Larry Underwood</h4>
          <p>Strength Training Coach</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-1.jpg"
            alt="Rachel Smith Personal Trainer" />
          <h4>Rachel Smith</h4>
          <p>Aerobics Instructor</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-2.jpg" alt="Nick Andros Personal Trainer" />
          <h4>Nick Andros</h4>
          <p>Pilates Instructor</p>
        </div>

        <div class="trainer-slider-item">
          <img src="https://onclickwebdesign.com/wp-content/uploads/trainer-3.jpg"
            alt="Larry Underwood Personal Trainer" />
          <h4>Larry Underwood</h4>
          <p>Strength Training Coach</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="commonForAll">
    <div class="footer-container">
      <div id="footer-logo" class="top-gym-logo">
        <a href="#">Fitness<br/>Club</a>
      </div>

      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="mind-care.php">Mind.care</a></li>
          <li><a href="fitness-care.php">Fit.care</a></li>
          <li><a href="diet-care.php">Diet.care</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
      </nav>

      <div class="mailing-list">
        <input type="text" placeholder="YOUR EMAIL" />
        <button>SIGN UP</button>
      </div>

      <ul class="social-icons">
        <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
        <li><a href="#"><span class="fab fa-behance"></span></a></li>
      </ul>

      <img src="https://onclickwebdesign.com/wp-content/uploads/footer-icon.png" class="bicep" alt="Bicep flex icon" />

<!--      <small>
        Copyright &copy;2020 All rights reserved | This template is made with <span class="fa fa-heart"></span> by <a href="https://colorlib.com">Colorlib</a>
      </small> -->
    </div>
  </footer>

  <!-- for the video tutorials code -->


  <div id="videoTutorial" class="videodivclass" style="display:none;">
    <div class="workouttutorial">
        <h1> Workout Videos</h1>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/DHD1-2P94DI" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YdB1HMCldJY" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xrhMpzhz0s4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/sRWs4DldzS0" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yplP5cLuyf4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/K6rBRLQRSDM" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/5uVaKjtJHN8" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7qFp5khuoFA" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="videoframe">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/aTGb9NEH2NI"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe></div>
        <div class="videoframe">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/FH7MwueSRVE" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>

  <script>
    // document ready function
    // starts swiper.js
  //   const swiper = new Swiper('.swiper-container', {
  //   direction: 'vertical',
  //   mousewheel: {},
  //   effect: 'cube',
  //   keyboard: {
  //     enabled: true,
  //     onlyInViewport: false
  //   }
  // });
    // ends swiper.js

   $('#btnClick1').on('click', function () {


       $('#videoTutorial').show();
       $('.commonForAll').hide();

    });

    $('#btnClick2').on('click', function () {

       // $('.main').show().siblings('#2').hide();
       $('.commonForAll').show();
       $('#videoTutorial').hide();

    });

    $(function () {


      $('#trainers-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              arrows: false
            }
          },
          {
            breakpoint: 530,
            settings: {
              slidesToShow: 1,
              arrows: false
            }
          }
        ]
      });
    });
  </script>
    <script src="/extraa js/dropdown.js"></script>
    <?php
    include 'extraa php/dropdown.php';
    ?>
    
</body>

</html>