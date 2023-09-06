<?php
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BBC Lifestyle | Home</title>

    <!--===FAVICON--------------------------------------------------------------------------------------------------------->
    <link rel="icon" href="Pics/BBC_Lifestyle_Logo.jpg">

    <!--===CSS------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">

    <!--===FONT-AWESOME CDN------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!--===BOOTSTRAP CDN--------------------------------------------------------------------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!--===GOOGLE FONTS---------------------------------------------------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,800&family=Dosis&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,800&family=Dosis&family=Orbitron:wght@800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,800&family=Dosis&family=Montserrat&family=Orbitron:wght@800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Economica&family=Epilogue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

</head>
<body>

<!--===NAVBAR SECTION-------------------------------------------------------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="Pics/BBC_Lifestyle_Logo_2.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mg-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="home.php#about-sec">about</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="home.php#services-sec">our services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="home.php#work-sec">our work</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="home.php#blog-sec">blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="home.php#faqs">faqs</a>
                </li>

                <li class="nav-item" >
                    <a class="nav-link btn text-white bg-dark px-3 rounded-0" href="contact.php">contact us</a>
                </li>
        </div>
    </div>
</nav>
<br>

<!--===FOOTER SECTION ACCORDION---------------------------------------------------------------------------------------->

<section>
    <footer class="bg-dark bg-footer" style="margin-top: 170px">
        <div class="container pt-5 pb-4" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="text-light title">about us</h5>
                    <p class="text-light para">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Cum cupiditate enim illo libero, nam nisi omnis qui quisquam quo unde.</p>
                    <p class="text-light number"><i class="fa fa-location"></i> 123 456 987</p>
                    <p class="text-light number"><i class="fa fa-phone"></i> (+) 0123 456 987</p>
                    <p class="text-light number"><i class="fa fa-envelope"></i> info@bbclifestyle.com</p>
                </div>

                <div class="col-lg-3">
                    <h5 class="text-light title">quick links</h5>
                    <ul class="text text-links">
                        <li><a href="">home</a></li>
                        <li><a href="">about</a></li>
                        <li><a href="">services</a></li>
                        <li><a href="">work</a></li>
                        <li><a href="">blog</a></li>
                        <li><a href="">faqs</a></li>
                        <li><a href="">contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 text-dark social">
                    <h5 class="text-light title">our socials</h5>
                    <ul class="text text-social">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                    </ul>
                </div>

            </div>
            <br>
            <hr class="line">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center text-light">Copyright &copy; 2023 . <a href="#">BBC Lifestyle</a> . All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
</section>

<!--===JS-------------------------------------------------------------------------------------------------------------->
<!--===BOOTSTRAP------------------------------------------------------------------------------------------------------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>

