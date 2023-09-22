<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
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

    <div class="heading" style="background:url(images/heading-img-3.jpg) no-repeat">
      <h1>Book Now</h1>
    </div>


   <!-- Booking section starts -->
      <section class="booking">
         <h1 class="heading-title">Book your trip!</h1>
         <form action="book_form.php" method="post" class="book-form">
              <div class="flex">
                 <div class="inputBox">
                    <span>Name: </span>
                    <input type="text" placeholder="Enter your name" name="name">
                 </div>
                 <div class="inputBox">
                    <span>Email: </span>
                    <input type="email" placeholder="Enter your email" name="email">
                 </div>
                 <div class="inputBox">
                    <span>Phone: </span>
                    <input type="enumber" placeholder="Enter your number" name="phone">
                 </div>
                 <div class="inputBox">
                    <span>Address: </span>
                    <input type="text" placeholder="Enter your address" name="address">
                 </div>
                 <div class="inputBox">
                    <span>Where to: </span>
                    <input type="text" placeholder="Place you want to visit" name="location">
                 </div>
                 <div class="inputBox">
                    <span>How many: </span>
                    <input type="number" placeholder="Number of persons" name="persons">
                 </div>
                 <div class="inputBox">
                    <span>arrivals: </span>
                    <input type="date" name="arrivals">
                 </div>
                 <div class="inputBox">
                    <span>leaving: </span>
                    <input type="date" name="leaving">
                 </div>
              </div>

              <input type="submit" value="Submit" class="btn" name="send">
             </form>
      </section>
   <!-- Booking section ends -->
    
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