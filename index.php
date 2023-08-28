<?php

?>

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

<!--===GOOGLE FONTS---------------------------------------------------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Jost&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Oxanium&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

<!--===BOOTSTRAP CDN--------------------------------------------------------------------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!--===BOXICONS CDN---------------------------------------------------------------------------------------------------->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!--===FONTAWESOME CDN------------------------------------------------------------------------------------------------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

</head>
<body>
<!--===NAVBAR---------------------------------------------------------------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="Pics/Logo_1.png" class="Logo" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" id="links" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="links" href="#">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="links" href="#">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="links" href="#">episodes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="links" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="start">recipes</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<!--===CAROUSEL(With Captions)----------------------------------------------------------------------------------------->

        <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
            <div class="carousel-indicators">
                <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button>
                <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button>
                <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Pics/maxresdefault_2.jpg"  alt="..." class="d-block w-100" >
                    <div class="carousel-caption">
                        <h5 class="animated fadeInDown" style="animation-delay: 2s">come dine <br> with me</h5>
                        <p class="animated fadeInUp d-none d-md-block" style="animation-delay: 3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                        <p class="animated fadeInUp" style="animation-delay: 4s"><a href="#">Learn More</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Pics/masterchef.jpg"  alt="..." class="d-block w-100" >
                    <div class="carousel-caption">
                        <h5 class="animated fadeInDown" style="animation-delay: 2s">master chef: The <br> Professionals</h5>
                        <p class="animated fadeInUp d-none d-md-block" style="animation-delay: 3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                        <p class="animated fadeInUp" style="animation-delay: 4s"><a href="#">Learn More</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Pics/Bathroom.jpg"  alt="..." class="d-block w-100" >
                    <div class="carousel-caption">
                        <h5 class="animated fadeInDown" style="animation-delay: 2s">the Great british <br> bake off </h5>
                        <p class="animated fadeInUp d-none d-md-block" style="animation-delay: 3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                        <p class="animated fadeInUp" style="animation-delay: 4s"><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
        </div>

<!--===ABOUT US SECTION------------------------------------------------------------------------------------------------>

        <section class="abt-sec">
            <div class="abt-sec-main">
                <img src="" alt="">

            </div>
        </section>

<!--===JAVASCRIPT------------------------------------------------------------------------------------------------------>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

<!----===SEPARATE------------------------------------------------------------------------------------------------------>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>

</body>
</html>
