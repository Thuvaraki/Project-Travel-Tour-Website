<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>
<body>
   <!-- header section starts -->
       <section class="header">
          <a href="home.php" class="logo">Travel</a>

           <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
          </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

   <!-- Home section starts -->
      <section class="home">
          <div class="swiper home-slider">
              <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                     <div class="content">
                          <span>Explore,discover,travel</span>
                          <h3>Travel around the world</h3>
                          <a href="package.php" class="btn">Discover more</a>
                     </div>
                  </div>
                 
                  <div class="swiper-slide" style="background:url(images/home-slide-2.jpg) no-repeat"> 
                     <div class="content">
                          <span>Explore,discover,travel</span>
                          <h3>Discover the new places</h3>
                          <a href="package.php" class="btn">Discover more</a>
                     </div>
                  </div>

                  <div class="swiper-slide" style="background:url(images/h-slide-3.jpg) no-repeat">
                     <div class="content">
                          <span>Explore,discover,travel</span>
                          <h3>Make your tour worthwhile</h3>
                          <a href="package.php" class="btn">Discover more</a>
                     </div>
                  </div>        
              </div>

              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
          </div>
      </section>
    <!-- Home section ends -->

    <!-- services section starts -->
         <section class="services">
               <h1 class="heading-title">Our Services</h1>
                  <div class="box-container">
                     <div class="box">
                        <img src="images/icon-1.png" alt="">
                        <h3>adventure</h3>
                     </div>

                     <div class="box">
                        <img src="images/icon-2.png" alt="">
                        <h3>tour guide</h3>
                     </div>

                     <div class="box">
                        <img src="images/icon-3.png" alt="">
                        <h3>trekking</h3>
                     </div>

                     <div class="box">
                        <img src="images/icon-4.png" alt="">
                        <h3>camp fire</h3>
                     </div>

                     <div class="box">
                        <img src="images/icon-5.png" alt="">
                        <h3>off road</h3>
                     </div>

                     <div class="box"> 
                        <img src="images/icon-6.png" alt="">
                        <h3>camping</h3>
                     </div>
                  </div>
         </section>
    <!-- services section ends -->

    <!-- Home about section starts -->
      <section class="home-about">
         <div class="image">
            <img src="images/home-about.jpg" alt="">
         </div>

         <div class="content">
            <h3>About Us</h3>
            <p>Lor em Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                 type and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                 also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            <a href="about.php" class="btn">Read More</a>
         </div>
      </section>
    <!-- Home about section ends -->

    <!-- Home package section starts -->
      <section class="home-packages">
         <h1 class="heading-title">Our Packages</h1>
            <div class="box-container">
               <div class="box">
                    <div class="image">
                       <img src="images/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                     <h3>Adventure & Tour</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, aut. </p>
                     <a href="book.php" class="btn">Book Now</a>
                    </div>
               </div>

               <div class="box">
                    <div class="image">
                       <img src="images/img-2.jpg" alt="">
                    </div>
                    <div class="content">
                     <h3>Adventure & Tour</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, aut. </p>
                     <a href="book.php" class="btn">Book Now</a>
                    </div>
               </div>

               <div class="box">
                    <div class="image">
                       <img src="images/img-3.jpg" alt="">
                    </div>
                    <div class="content">
                     <h3>Adventure & Tour</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, aut. </p>
                     <a href="book.php" class="btn">Book Now</a>
                    </div>
               </div>
            </div>
            <div class="load-more">
               <a href="package.php" class="btn">Load more</a>
            </div>
      </section>
    <!-- Home package section ends -->

    <!-- Home offer section starts-->
      <section class="home-offer">
           <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione officiis nostrum similique iusto fugiat id tempore 
               architecto quas eligendi temporibus!</p>
            <a href="book.php" class="btn">Book Now</a>
           </div>


      </section>
    <!-- Home offer section ends -->
    
    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
               <h3>Quick Links</h3>
               <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
               <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
               <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
               <a href="book"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
               <h3>Extra Links</h3>
               <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
               <a href="#"><i class="fas fa-angle-right"></i>about us</a>
               <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
               <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
               <h3>contact info</h3>
               <a href="#"><i class="fas fa-phone"></i>+94-753-458-989</a>
               <a href="#"><i class="fas fa-phone"></i>+94-123-345-567</a>
               <a href="#"><i class="fas fa-envelope"></i>thuvaraki.erampamoorthy@gmail.com</a>
               <a href="#"><i class="fas fa-map"></i>Colombo,Sri Lanka</a>
            </div>

            <div class="box">
               <h3>follow us</h3>
               <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
               <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
               <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
               <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div> 

        <div class="credit">created by <span>Thuvaraki </span>| all rights reserved !</div>
    </section>
    <!-- footer section ends -->

  


  <!--swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <!-- css file link -->
  <script src="js/script.js"></script>  
</body>
</html>