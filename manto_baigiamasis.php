<?php
    require __DIR__ . '/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Manto_baigiamasis</title>
    <script src="https://kit.fontawesome.com/a83ae529c5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <section class="backgphoto container"> <!-- pirmas blokas su backgroundu -->
        <header class="site-header"> <!-- headeris -->
                <nav class="main-nav">
                    <ul class="flex-container container">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Photoapp</a></li>
                        <li><a href="#"><img src="images/logo1.png" alt="logo"></a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Download</a></li>
                    </ul>
                    <div class="menu-mobile">
                        <button onclick="myFunction()" class="dropbtn">Menu</button>
                        <ul id="myDropdown" class="dropdown-content">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Photoapp</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Download</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        <section class="hero">
            <div class="container">
                <h1>Your life, a photo</h1>
                <p>print your life in a simple photo</p>
                <a href="#">Get started</a>
            </div>
            <div class="">
                <ul class="icons flex-container container">
                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.flickr.com/"><i class="fab fa-flickr"></i></a></li>
                    <li><a href="https://dribbble.com/"><i class="fab fa-dribbble"></i></a></li>          
                </ul>
            </div>
        </section>
    </section> 
    <section class="secondpage container"> <!-- antra dalis -->
        <div class="flex-container">
            <div class="section-heading">
                <h2>Represent your life with a simple photo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut <strong>enim ad minim</strong>, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Get started</a>
            </div>
                <img src="images/smartphone1-min.png">
        </div>
    </section> 
    <section class="thirdpage container"> <!-- trecia dalis -->
        <div class="flex-container">
            <div class="section-picture">
                <img id="object-2" src="images/smartphone2-min.jpg">
            </div>
            <div class="section-heading">
                <h2>Design</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut <strong>enim ad minim</strong> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Learn more</a>
            </div>
        </div>
    </section>
    <section class="fourthpage container">  <!-- ketvirta dalis -->
        <div class="flex-container container">
            <div class="community com-logo">
                <a><img src="images/logo_green.png" alt="logo"></a>
                <h3>Our Community</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="community pic">
                <img src="images/car1_03-min.jpg" alt="car">
            </div>
            <div class="community pic">
                <img src="images/leaves1_03-min.jpg" alt="leaves">
            </div>
        </div>
    </section>
    <section class="fifthpage backgphoto2 container flex-container"> <!-- penkta dalis -->
        <div class="container">
            <div>
                <h2>Subscribe to us community</h2>
            </div>
            <div class="contactform">
                <form id="contact" action="manto_baigiamasis.php" method="post">
                    <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus></p>
                    <p><input type="email" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                    <p><textarea placeholder="Jūsų žinutė..." name="message" required></textarea></p>
                    <p><button name="submit" type="submit" id="contact-submit">Siųsti</button></p>
                </form>
            </div>
        </div>
    </section>
    <section class="sixthpage container">  <!-- sesta dalis -->
        <div class="sestas">
            <div class="section-heading container">
                <h3>Download it</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="downloadit flex-container">
                <p><a href="#">Apple Store<i class="fab fa-apple"></i></a></p>
                <p><a href="#">Play Store<i class="fab fa-android"></i></a></p>
            </div>
        </div>
    </section>
    <footer class="footer"> <!-- footeris -->
        <div class="container">
            <nav class="footer-nav flex-container">
                <div class="fnav">
                    <ul class="flex-container">
                        <li><a href="#">Credits</a></li>
                        <li></li>
                        <li><a href="#">Privacy</a></li>
                        <li></li>
                        <li><a href="#">Our Teams</a></li>
                    </ul>
                        <p>&copyCopyright <?php echo date('Y'); ?> by phototime - all right reserved</p>
                </div>
                <div>
                    <a href="#"><img src="images/logo_green.png" alt="logo"></a>
                </div>
            </nav>
        </div>
    </footer>
    <script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
