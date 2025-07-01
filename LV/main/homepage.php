<?php
session_start();
include("connect.php");

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon">
	<link rel="stylesheet" href="style1.css">
	<title>Luvidicus</title>
</head>
<body>
<!--------------------------- php ---------------------------------> 
<?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
<!--------------------------- Top Menu ---------------------------------> 
    <section class="home">
        <div class="home-box">
            <nav>
                <div class="logo bars">
                    <div class="bar">
                        <i class="fa fa-bars"></i>
                    </div>
                    <h3>Luvidicus</h3>
                </div>
                <div class="menu">
                    <div class="close">
                        <i class="fa fa-close"></i>
                    </div>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">shop</a></li>
                        <li><a href="index1.php">premium</a></li>
                    </ul>
                </div>
                <div class="signup-login">
					<a href="logout.php">Logout</a>
                    <a href="index.php">Signup</a>
                </div>
            </nav>
<!--------------------------- Homepage Start -----------------------------> 
            <div class="content">
                <h5>Luvidicus</h5>
                <h1>Luvidicus X Zara</h1>
                <p>NEW COLLECTION COMING SOON</p>

            </div>
        </div>
    </section>
<!-------------------------- Homepage end --------------------------------> 

<!-------------------------- Coming soon  --------------------------------> 
    <section class="featured">
        <div class="container">
            <div class="box box1">
                <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LV\main\images\image1.jpg" alt="">
                <div class="content">
                    <h4>Coming Soon!</h4>
                    <p>Upcoming collaboration with Zara X Luvidicus, bringing a fresh blend of style to our collection and innovation to your wardrobe.</p>
                </div>
            </div>
            <div class="box box2">
                <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\perfume.png" alt="">
                <div class="content">
                    <h4>Our Launch of our new perfume</h4>
                    <p>Crafted to evoke elegance and allure, this fragrance promises to be a perfect blend of captivating notes that will leave a lasting impression. Stay tuned for a scent that defines sophistication and luxury.</p>
                </div>
            </div>
            <div class="box box3">
                <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\image2.jpg" alt="">
                <div class="content">
                    <h4>Luvidicus Sale</h4>
                    <p>Enjoy exclusive promotions and special offers, ensuring that luxury is accessible to all. Experience the allure of Luvidicus Premium and indulge in a world of timeless elegance.</p>
                </div>
            </div>
        </div>
    </section>
<!------------------------ Coming soon end ------------------------------> 

<!-------------------------- Item Section -------------------------------> 
    <section class="items">
        <h4 class="label">Recent Drops</h4>
        <div class="container">
            <div class="container-box">
                <h2 class="heading">ITEMS</h2>
                <div class="content">
                </div>
            </div>
            <div class="gallery">
                <div class="box box1">
                    <image src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\item1.jpg" alt="">
                    <div class="text">
                        <h2>OLD MONEY MENS</h2>
                    </div>
                </div>
                <div class="box box2">
                    <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\item2.jpg" alt="">
                    <div class="text">
                        <h2>SUMMER SPECIAL</h2>
                    </div>
                </div>
                <div class="box box3">
                    <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\item3.jpg" alt="">
                    <div class="text">
                        <h2>WOMEN STREETWEAR</h2>
                    </div>
                </div>
                <div class="box box4">
                    <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\item4.jpg" alt="">
                    <div class="text">
                        <h2>OLD MONEY WOMEN</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
<!------------------------- Item Section End -----------------------------> 

<!-------------------------- Preminum Section ----------------------------> 
    <section class="preminum">
        <div class="gallery">
            <div class="box box1">
                <div class="first-box">
                    <h4 class="label">Featured Offers</h4>
                    <h2 class="heading">Luvidicus Black</h2>
                    <p>
                        Unlock Exclusive Item, Content, Offers and Upcoming Collaborations.
                    </p>
                    <a href="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\premium\index.html">View Premium</a>
                </div>
            </div>
            <div class="box box2">
                <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\item7.jpg" alt="">
                <div class="content">
                    <h2>Annual Fall Sale</h2>
                    <div class="review-and-idr">
                        <p>20% OFF EVERYTHING</p>
                    </div>
                </div>
            </div>
            <div class="box box3">
                <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\item8.jpg" alt="">
                <div class="content">
                    <h2>G-STAR RAW X LUVIDICUS</h2>
                    <div class="review-and-idr">
                        <p>LIMITED ADDITION COLLECTION</p>
                    </div>
                </div>
            </div>
            <div class="box box4">
                <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\item9.jpg" alt="">
                <div class="content">
                    <h2>LUVIDICUS</h2>
                    <div class="review-and-idr">
                        <p>SPORT TRACK</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!------------------------ Item Section End ----------------------------> 

<!-------------------------- News Section ------------------------------> 
    <section class="article">
        <h4 class="label">News</h4>
        <h2 class="heading">Latest</h2>
        <div class="container">
            <div class="latest-article">
				<video autoplay loop muted play-inline class="latest-article">
				<source src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\video1.mp4" type="video/mp4">
				<video>
            </div>
            <div class="more-article">
                <div class="box box1">
                    <div class="image">
                        <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\image4.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>October Drop</h3>
                        <li>10% OFF the first week</li>
                    </div>
                </div>
                <div class="box box2">
                    <div class="image">
                        <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\image5.png" alt="">
                    </div>
                    <div class="text">
                        <h3>Luvidicus x Zara Collection dropping soon!</h3>
                    </div>
                </div>
                <div class="box box3">
                    <div class="image">
                        <img src="C:\Users\Kesharan Kyle Pillay\Desktop\LUVIDICUS\files\streetdrop.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Street Drop almost sold out.</h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
<!--------------------------- News Section ----------------------------> 

<!------------------------ Footer Section -----------------------------> 
    <footer>
        <section class="footer">
            <div class="container">
                <div class="detail">
                    <h3>Luvidicus</h3>
                    <p>Luvidicus curates pieces that reflect a classic, understated style, catering to those who appreciate the heritage of fashion and the opulence of well-crafted designs. Whether it's for a formal occasion or simply elevating everyday wear, Luvidicus promises an experience of luxury and class.</p>
                    <h5>Email Us</h5>
                    <a href="#">kesharan16@gmail.com</a>
                    <div class="social">
                        <a href="#"><i class="fa fa-linkedin-square"></i></a>
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                    </div>
                </div>
                <div class="about-us">
                    <h4>About Us</h4>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Term</a></li>

                </div>
                <div class="about-us">
                    <h4>Help</h4>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Product Care</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Store</a></li>
                </div>
                <div class="about-us">
                    <h4>Resources</h4>
                    <li><a href="#">Download Our App</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Offers</a></li>
                </div>
            </div>

            <div class="copyright">
                <div>
                    &copy;2024 - Luvidicus, inc, all rights reserved
                </div>
                <div>
                    <a href="#">term & conditions</a>
                    <a href="#">privacy policy</a>
                </div>
            </div>
        </section>
    </footer>

<!----------------------- Footer Section ----------------------------> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script1.js"></script>
</body>
</html>