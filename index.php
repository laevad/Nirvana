<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIT Studio</title>

    <!--FAVICON-->
    <link rel="icon" type="image/x-icon" href="logo-white.png">

    <!--BOOTSTRAP CDN FOR CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--LORDICON ANIMATED ICONS-->
    <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>

    <!--FONTAWESOME CDN FOR ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!--CUSTOM CSS-->
    <link rel="stylesheet" type="text/css" href="main.css" />

    <!--OWL CAROUSEL-->
    <link rel="stylesheet" href="owl_carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl_carousel/owl.theme.default.css">
</head>

<body>
    <!--OVERLAY-->
    <div class="overlay" id="home"></div>

    <!--NAVIGATION BAR STARTS HERE-->
    <nav class="navbar navbar-expand-md navbar-default bg-dark fixed-top">
        <a class="navbar-brand">
            <img src="logo-white.png" width="80" height="45" class="d-inline-block align-top" alt=""/>
        </a>

        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="collection.php">Collection</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="collection.php">Account</a>
                </li>
            </ul>

            <form class="d-flex" action="search.php" METHOD="post">
                <div class="input-group">
                    <input type="text" id="searchField" name="searchField" class="form-control" placeholder="Search	"/>
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
    </nav>
    <!--NAVIGATION BAR ENDS HERE-->

    <!--HERO SECTION STARTS HERE-->
    <section id="hero">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="img-fluid" autoplay loop muted>
                        <source
                            src="https://assets.mixkit.co/videos/preview/mixkit-man-focused-on-study-for-exam-in-library-9049-large.mp4"
                            type="video/mp4" />
                    </video>
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Welcome to our</h2>
                        <br>
                        <h2>Library!</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carousel/slide1.jpg" class="d-block w-100" alt="">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Read books of different topics, genres, and authors right at your finger tips.</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carousel/slide2.jpg" class="d-block w-100" alt="">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>One glance at a book and you hear the voice of another person, perhaps</h3>
                        <br>
                        <h3>someone dead for 1,000 years. To read is to voyage through time.</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carousel/slide3.jpg" class="d-block w-100" alt="">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Best Books for the Year</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="carousel/slide5.jpg" class="d-block w-100" alt="">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Award Winning Titles</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!--HERO SECTION ENDS HERE-->

    <!--FEATURE SECTION STARTS HERE-->
    <section id="features">
        <h2 class="headings1">WHY CHOOSE <strong> WIT STUDIO?</strong> </h2>
        <div class="py-5 service-1">
            <div class="container">
                <!--ROW -->
                <div class="row">
                    <!--COLUMN-->
                    <div class="col-md-4 wrap-service1-box">
                        <div class="card border-0 card-shadow mb-4">
                            <div class="card-body text-center">
                                <div class="my-3">
                                    <lord-icon src="https://cdn.lordicon.com/pxecqsgb.json" trigger="hover"
                                        style="width: 100px; height: 100px">
                                    </lord-icon>
                                </div>
                                <h6 class="font-weight-medium">
                                    Read Free Library Books Online
                                </h6>
                                <p class="mt-3">
                                    Millions of books available Controlled Digital Lending
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--COLUMN-->
                    <div class="col-md-4 wrap-service1-box">
                        <div class="card border-0 card-shadow mb-4">
                            <div class="card-body text-center">
                                <div class="my-3">
                                    <lord-icon src="https://cdn.lordicon.com/dxoycpzg.json" trigger="hover"
                                        style="width: 100px; height: 100px">
                                    </lord-icon>
                                </div>
                                <h6 class="font-weight-medium">
                                    Keep Track of your Favorite Books
                                </h6>
                                <p class="mt-3">
                                    Organize your Books using Lists & the Reading Log
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--COLUMN-->
                    <div class="col-md-4 wrap-service1-box">
                        <div class="card border-0 card-shadow mb-4">
                            <div class="card-body text-center">
                                <div class="my-3">
                                    <lord-icon src="https://cdn.lordicon.com/iqocwzif.json" trigger="hover"
                                        style="width: 100px; height: 100px">
                                    </lord-icon>
                                </div>
                                <h6 class="font-weight-medium">
                                    Try the virtual Library Explorer
                                </h6>
                                <p class="mt-3">
                                    Digital shelves organized in the manner of a physical
                                    library
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURE SECTION ENDS HERE-->

    <!--SUBJECTS SECTION STARTS HERE-->
    <section id="subject">
        <h2 class="headings2">SUBJECTS</h2>
        <div class="accordion" id="accordionSubjects">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Arts
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionSubjects">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="column">
                                <p>
                                    <a href="https://www.youtube.com/watch?v=E6x6jnYioHs">Architecture</a>
                                    <br />
                                    <a href="#">Art Instruction</a><br />
                                    <a href="#">Art History</a><br />
                                    <a href="#">Design</a><br />
                                    <a href="#">Fashion</a><br />
                                </p>
                            </div>
                            <div class="column">
                                <p>
                                    <a href="#">Film</a> <br />
                                    <a href="#">Graphic Design</a><br />
                                    <a href="#">Music Theory</a><br />
                                    <a href="#">Painting</a><br />
                                    <a href="#">Photography</a><br />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Fiction
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionSubjects">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="column">
                                <p>
                                    <a href="#">Fantasy</a> <br />
                                    <a href="#">Historical Fiction</a><br />
                                    <a href="#">Horror</a><br />
                                    <a href="#">Humor</a><br />
                                    <a href="#">Mystery and detective stories</a><br />
                                </p>
                            </div>
                            <div class="column">
                                <p>
                                    <a href="#">Poetry</a> <br />
                                    <a href="#">Romance</a><br />
                                    <a href="#">Science Fiction</a><br />
                                    <a href="#">Thriller</a><br />
                                    <a href="#">Young Adult</a><br />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Science and Mathematics
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionSubjects">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="column">
                                <p>
                                    <a href="#">Biology</a> <br />
                                    <a href="#">Chemistry</a><br />
                                    <a href="#">Mathematics</a><br />
                                </p>
                            </div>
                            <div class="column">
                                <p>
                                    <a href="#">Physics</a> <br />
                                    <a href="#">Programming</a><br />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Health and Wellness
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionSubjects">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="column">
                                <p>
                                    <a href="#">Cooking</a> <br />
                                    <a href="#">Cookbooks</a><br />
                                    <a href="#">Mental Health</a><br />
                                </p>
                            </div>
                            <div class="column">
                                <p>
                                    <a href="#">Exercise</a> <br />
                                    <a href="#">Nutrition</a><br />
                                    <a href="#">Self Help</a><br />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Textbooks
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionSubjects">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="column">
                                <p>
                                    <a href="#">History</a> <br />
                                    <a href="#">Mathematics</a><br />
                                    <a href="#">Geometry</a><br />
                                    <a href="#">Psychology</a> <br />
                                    <a href="#">Algebra</a><br />
                                    <a href="#">Education</a><br />
                                </p>
                            </div>
                            <div class="column">
                                <p>
                                    <a href="#">Business and Economics</a><br />
                                    <a href="#">Science</a><br />
                                    <a href="#">Chemistry</a><br />
                                    <a href="#">Englsih Language</a><br />
                                    <a href="#">Physics</a><br />
                                    <a href="#">Computer Science</a><br />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SUBJECTS SECTION ENDS HERE-->

    <!--BOOK CAROUSEL SECTION STARTS HERE-->
    <div id="book-carousel">
        <h1 class="text-center">OUR TOP PICKS</h1>
        <!--FICTION COLLECTION-->
        <div class="container">
            <div class="row my-5">
                <h3 class="fw-bold w-75 mx-auto text-center">Top Fiction</h3>
            </div>
            <div class="row g-4 my-5 mx-auto owl-carousel owl-theme">
                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF1.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Jane Austen</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Pride and
                            Prejudice</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(325 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF6.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">John Green</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">The Fault In Our
                            Stars</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(300 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF3.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">J. D. Salinger</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">The Catcher in the
                            Rye</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(200 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF4.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Delia Owens</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Where The Crawdads
                            Sing</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(105 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF5.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Collen Hoover</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">November 9</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(225 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF7.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Madeline Miller</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">The Song Of
                            Achilles</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(200 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF8.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Gabrielle Zevin</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Tomorrow, and
                            Tomorrow, and Tomorrow </a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(90 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF9.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Taylor Jenkins Reid</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">The Seven Husbands
                            of Evelyn Hugo</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(280 reviews)</span>
                        </div>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF10.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Nicholas Sparks</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Dreamland</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(250 reviews)</span>
                        </div>
                    </div>
                </div>
                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="Fiction/LF2.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Noah Hawley</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Before The Fall</a>
                        <div class="rating d-flex mt-1">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                            <span>(150 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--NONFICTION COLLECTION-->

        <div class="container">
            <div class="row my-5">
                <h3 class="fw-bold w-75 mx-auto text-center">Top Non-Fiction</h3>
            </div>
            <div class="row g-4 my-5 mx-auto owl-carousel owl-theme">
                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/Art.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Rainer Metzger, Ingo F. Walther</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Van Gogh. The
                            Complete Paintings</a>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/AsianArt.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Jessica Niebel, Daniel Kothenschulte (Text by), Hayao Miyazaki
                            (Artist), Toshio Suzuki (Foreword by), Pete Docter (Text by)</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Hayao Miyazaki</a>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/Astronomy.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Neil deGrasse Tyson</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Starry Messenger:
                            Cosmic Perspectives on Civilization</a>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/Biology.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Siddhartha Mukherjee</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">The Song of the
                            Cell: An Exploration of Medicine and the New Human</a>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/fashion.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Terry Newman</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Harry Styles: And
                            the Clothes he Wears</a>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/food.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Melissa Clark</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Dinner in One:
                            Exceptional & Easy One-Pan Meals: A Cookbook</a>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/Math.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Liza Mundy</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Code Girls: The
                            Untold Story of the American Women Code Breakers of World War II </a>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/physics.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Randall Munroe</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">What If? 2:
                            Additional Serious Scientific Answers to Absurd Hypothetical Questions </a>
                    </div>
                </div>

                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/Self.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">James Clear</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Atomic Habits: An
                            Easy & Proven Way to Build Good Habits & Break Bad Ones</a>
                    </div>
                </div>
                <div class="col product-item mx-auto">
                    <div class="product-img">
                        <img src="NonFiction/Technology.jpg" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-cart-plus"></i> Add to List
                            </button>
                            <button type="button" class="col-6 py-2">
                                <i class="fa fa-binoculars"></i> View
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3">
                        <span class="product-type">Marty Groover</span>
                        <a href="#" class="d-block text-dark text-decoration-none py-2 product-name">Speed of Advance:
                            How the U.S. Navy's Convergence of People, Process, and Technology Can Help Your Business
                            Win in the 4th Industrial Revolution</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BOOK CAROUSEL SECTION ENDS HERE-->

	<!--FOOTER SECTION STARTS HERE-->
	<footer class="text-center text-white" style="background-color: #56382D" id="footer">
		<div class="container">
			<section class="inq">
				<div class="row d-flex justify-content-center pt-4">
					<div class="col-lg-8">
						<h2 class="text-uppercase font-weight-bold text-decoration-none text-white">Contact the
						Enquiry Service</h2>
					</div>
				</div>
			</section>
			<section class="dt">
				<div class="row text-center d-flex justify-content-center pt-3">
					<div class="col-md-3">
						<h6 class="text-uppercase font-weight-bold text-decoration-none">
							<a href="#" class="inqb"><i class="fa-solid fa-magnifying-glass fa-1x me-3"></i>Help
							Finding Resources</a>
						</h6>
					</div>
					<div class="col-md-3">
						<h6 class="text-uppercase font-weight-bold">
							<a href="#" class="inqb"><i class="fa fa-envelope fa-1x me-3"></i>Contact Us</a>
						</h6>
					</div>
					<div class="col-md-3">
						<h6 class="text-uppercase font-weight-bold">
							<a href="#" class="inqb"><i class="fa-regular fa-message fa-1x me-3"></i>Ask a Librarian
							Live Chat</a>
						</h6>
					</div>
					<div class="col-md-3">
						<h6 class="text-uppercase font-weight-bold">
							<a href="#" class="inqb"><i class="fa-solid fa-circle-info fa-1x me-3"></i>Discover</a>
						</h6>
					</div>
				</div>
			</section>
		</div>

		<div class="ct mt-3">
			<h1>
				<a class="text-white me-2">Connect to WIT Studio:</a>
			</h1>
			    <a href="" class="social-links me-3"><i class="fab fa-facebook-f fa-1x"></i></a>
			    <a href="" class="social-links me-3"><i class="fab fa-twitter fa-1x"></i></a>
		</div>
		<div class="cp text-center p-3">&#169; 2022 Copyright: 
            <a class="text-white" href="#">WIT STUDIO</a>
		</div>
	</footer>
	<!--FOOTER SECTION ENDS HERE-->

    <!--SEPERATE POPPER AND BOOTSTRAP JS-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
	integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
	integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
	crossorigin="anonymous"></script>

	<!--JQUERY-->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script
    src="https://code.jquery.com/jquery-3.6.1.slim.js"
    integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

    <!--OWL CAROUSEL-->
    <script src="owl_carousel/owl.carousel.js"></script>
    <script src="owl_carousel/script.js"></script>

    <!--CUSTOM JAVASCRIPT-->    
    <script src="main.js"></script>
    <script>
        //  searchbar autocomplete (jquery)
        <?php $query = "SELECT book_title FROM books order by book_title ASC";
        $query_run = mysqli_query($con, $query);
        ?>
        $(function () {
            var bdata = [
                <?php foreach ($query_run as $book){ ?>
                <?php echo  '"'.html_entity_decode($book['book_title']).'",';?>
                <?php  } ?>
            ];

            $("#searchField").autocomplete({
                source:bdata
            });

        });

    </script>
</body>
</html>