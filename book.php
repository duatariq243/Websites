<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compatible " content="IE=edge">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0">
        <title>Home</title>

       
        <link rel="stylesheet " href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    </head>
    <body>

        <!--header section starts-->
        <section class="header">
        <a href="home.php" class="logo" ><img src="images/logo2.png" alt="" width="60px" height="60px"></a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="book.php">Book</a>
            
            <a href="Packages.php">Packages</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
        </section>
<!--header section ends-->


<div class="heading" style="background:url(images/20.jpg) no-repeat">
<h1>Book now</h1>
</div>


<!--book section starts-->
<section class="booking">
    <h1 class="heading-title"> Book your event!</h1>
    <form action="https://formsubmit.co/kanzatariq26@gmail.com" method="POST" class="book-form" ">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder ="enter your name" name ="name" required>
            </div>

            <div class="inputBox">
                <span>email:</span>
                <input type="text" placeholder ="enter your email" name ="email" required >
            </div>

            <div class="inputBox">
                <span>number:</span>
                <input type="text" placeholder ="enter your number " name ="phone" required>
            </div>

            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder ="enter your address" name ="address" required>
            </div>
        

            <div class="inputBox">
                <span>Select Event:</span>
                <input type="text" placeholder ="event you want to book" name ="eventname" required>
            </div>

            <div class="inputBox">
                <span>how many:</span>
                <input type="number" placeholder ="number of guests" name ="guests"required>
            </div>
            <div class="inputBox">
                <span>Event Start date:</span>
                <input type="date"  name ="startdate" required>
            </div>

            <div class="inputBox">
                <span>Event End date :</span>
                <input type="date"  name ="enddate" required >
            </div>
            

        </div>
        <input type="submit" value="submit" class="btn" name="send">



    </form>




</section>
<!--book section ends-->





 <!--Footer section starts-->
 <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            <a href="Packages.php"><i class="fas fa-angle-right"></i>Packages</a>
            

        </div>


        <div class="box">
            <h3>Extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
       
           
        </div>

        <div class="box">
            <h3>Contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+971 58 909 1517</a>
        <a href="#"><i class="fas fa-envelope"></i>kanzatariq26@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Bay Square ,Dubai - 00000</a>
        
       
           
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>kenztar_rajput</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>


    </div>
    
     <div class="credit"> created by <span> Dua Ali Gondal</span> | all rights reserved</div>


   </section>

    
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="script.js"></script>

       
    </body>



</html>