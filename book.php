<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>booking</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <!--header section-->
        <section class="header">
        <a href="home.php" class="logo"><img src="images/logo.png" widht="70" height="60"></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
                <a href="blog.php">Blog</a>
                <a href="about.php">About</a>

            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
            
        </section>
        <!--header ends-->
        <!--booking section starts-->
        <section class="booking">
            <h1 class="heading-title">book your trip!</h1>
            <form action="book_form.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" placeholder="enter your name" name="name" >
                    </div>

                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="enter your email" name="email" >
                    </div>

                    <div class="inputBox">
                        <span>phone :</span>
                        <input type="number" placeholder="enter your number" name="phone" >
                    </div>

                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="enter your address" name="address" >
                    </div>

                    <div class="inputBox">
                        <span>Where to :</span>
                        <input type="text" placeholder="place you want to visit" name="location" >
                    </div>

                    <div class="inputBox">
                        <span>how many :</span>
                        <input type="number" placeholder="number of guests" name="guests" >
                    </div>

                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date" name="arrivals" >
                    </div>

                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date" name="leaving" >
                    </div>
                </div>
                <input type="submit" value="submit" class="btn" name="send" >
                <a href="p.php" class="btn1">Pay</a>
            </form>
        </section>
        <!--booking section ends-->
      



        <!--footer section-->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                <a href="blog.php"><i class="fas fa-angle-right"></i>Blog</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                </div>
                <div class="box">
                    <h3>Extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                    <a href="h#"><i class="fas fa-angle-right"></i>Privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                    <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                    <a href="#"><i class="fas fa-envelope"></i> divyapawar843@gamil.com</a>
                    <a href="#"><i class="fas fa-map"></i> mumbai,india 400022</a>
                </div>

                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"><i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"><i class="fab fa-instagram"></i> intagram </a>
                    <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
                     </div>

            </div>
            <div class="credit">Created by<span>ms.web designer</span>| All rights reserved!</div>
        </section>
        <!--footer ends-->
        

        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>
