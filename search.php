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

        <form class="d-flex" action="" METHOD="post">
            <div class="input-group">
                <input type="text" id="searchField" name="searchField" class="form-control searchField" placeholder="Search	" />
                <button type="submit" class="btn btn-secondary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
    </div>
</nav>
<div class="">
    <?php
    ?>
    <div class="row g-4 my-5 mx-auto owl-theme">
        <?php
        if (isset($_POST['searchField'])){
            $search = $_POST['searchField'];
//            $search = str_replace($search,"'", "\\'");
            if (preg_match('/[\']/', $search))
            {
                $search = str_replace($search,"'", "\\'");
            }
            $query = "SELECT * FROM books where book_title like '%".$search."%'";
            $res = mysqli_query($con, $query);
            if (mysqli_num_rows($res) > 0) {
                foreach ($res as $book) {
                    ?>
                    <div class="col " style="width: 200px">
                        <div class="product-img" style="width: 200px">
                            <a href="collection-details.php?id=<?= $book['id']; ?>&genre=NonFiction" >
                                <img src="<?= $book['book_pic'] ?>"  alt="" class="img-fluid d-block mx-auto">
                            </a>
                            <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>

                        </div>
                        <div class="product-info p-3">
                            <span class="product-type"><?= $book['book_author'] ?></span>
                            <a href="collection-details.php?id=<?= $book['id']; ?>&genre=NonFiction" class="d-block text-dark text-decoration-none py-2 product-name">
                                <?= $book['book_title'] ?></a>

                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "<h5> No Record Found </h5>";
            }
        }
        ?>
    </div>
</div>
<!--NAVIGATION BAR ENDS HERE-->
<div class="" style="margin-top: 70px"></div>
<div class="row p-5" style="margin-top: 50px">

</div>
<div class="" style="margin-top: 200px"></div>
<!--FOOTER SECTION STARTS HERE-->
<footer class="text-center text-white" style="background-color: #56382D" id="footer">
    <div class="container">
        <section class="inq">
            <div class="row d-flex justify-content-center pt-4">
                <div class="col-lg-8">
                    <h2 class="text-uppercase font-weight-bold text-decoration-none text-white">Results</h2>
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
            <?php echo  '"'.$book['book_title'].'",';?>
            <?php  } ?>
        ];

        $(".searchField").autocomplete({
            source:bdata
        });

    });

</script>
</body>
</html>