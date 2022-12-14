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

	<!--FONTAWESOME CDN FOR ICONS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

	<!--CUSTOM CSS-->
	<link rel="stylesheet" type="text/css" href="main.css"/>

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
					<a class="nav-link" href="index.php">Home</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#footer">Contact</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="about.html">About</a>
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
		
	<!--ABOUT US STARTS HERE-->
	<div class="container py-5">
		<div class="row h-100 align-items-center py-5">
			<div class="col-lg-6">
			 	<h1 class="display-4 mt-5">About us</h1>
			 	<p class="abtus">WIT Studio was established in 2013 to make academic books 
			 	more accessible by delivering open infrastructure services to scholars and student stakeholders. 
			 	Regardless of their location or economic status, they believe everyone should have access to
			 	high-quality academic books. Our books are made available through libraries, publishers, and other partners.</p>
			 	<button class="lrn font-weight-bold mt-4">Learn More</button>
			</div>

			<div class="col-lg-6 d-none d-lg-block">
			<img src="logo.png" alt="" 
			class="img-fluid">
			</div>
			
		</div>
	</div>
	<!--ABOUT US ENDS HERE-->

	<!--TEAM SECTION STARTS HERE-->
	<div class="team">
		<div class="container py-5">
			<div class="row text-center">
			   	<div class="col-lg-8 mx-auto col-md-12 col-sm-12 col-12">
					<h1>The <strong>Team</strong></h1>
			   	</div>
			</div>

			<div class="row pt-5">
				<div class="profile col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="row mb-5">
						<div class="col-lg-5 col-md-6 col-sm-6 col-6">
						<img src="profile/photo1.jpg" 
						class="img img-fluid"
						alt="">
						</div>

						<div class="teamdc col-lg-7 col-md-6 col-sm-6 col-6 pt-3">
							<h5>Tanno, Mantaro</h5>
							<h6 class="role mb-3">Founder and Web Designer</h6>
							<a href="" class="social-links-profile me-1"><i class="fab fa-facebook fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-twitter fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-github fa-2x"></i></a>
						</div>
					</div>
				</div>
				
				<div class="profile col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="row mb-5">
						<div class="col-lg-5 col-md-6 col-sm-6 col-6">
						<img src="profile/photo2.jpg" 
						class="img img-fluid"
						alt="">
						</div>
						<div class="teamdc col-lg-7 col-md-6 col-sm-6 col-6 pt-3">
							<h5>Baluyut, Jerome</h5>
							<h6 class="role mb-3">Graphic Designer</h6>
							<a href="" class="social-links-profile me-1"><i class="fab fa-facebook fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-twitter fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-github fa-2x"></i></a>
						</div>
					</div>
				</div>
				
				<div class="profile col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="row mb-5">
						<div class="col-lg-5 col-md-6 col-sm-6 col-6">
							<img src="profile/photo3.jpg" 
							class="img img-fluid"
							alt="">
						</div>
						<div class="teamdc col-lg-7 col-md-6 col-sm-6 col-6 pt-3">
							<h5>Libatique, Yzabela Chloie</h5>
							<h6 class="role mb-3">UI/UX Designer</h6>
							<a href="" class="social-links-profile me-1"><i class="fab fa-facebook fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-twitter fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-github fa-2x"></i></a>
						</div>
					</div>
				</div>
				
				<div class="profile col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="row mb-5">
						<div class="col-lg-5 col-md-6 col-sm-6 col-6">
						<img src="profile/photo4.jpg" 
						class="img img-fluid"
						alt="">
						</div>
						<div class="teamdc col-lg-7 col-md-6 col-sm-6 col-6 pt-3">
							<h5>Nogales, Kaithlyn</h5>		
							<h6 class="role mb-3">Web Designer</h6>
							<a href="" class="social-links-profile me-1"><i class="fab fa-facebook fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-twitter fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-github fa-2x"></i></a>
						</div>
					</div>
				</div>
				
				<div class="profile col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="row mb-5">
						<div class="col-lg-5 col-md-6 col-sm-6 col-6">
						<img src="profile/photo5.jpg" 
						class="img img-fluid"
						alt="">
						</div>
						<div class="teamdc col-lg-7 col-md-6 col-sm-6 col-6 pt-3">
							<h5>Peneira, Joycelyn</h5>
							<h6 class="role mb-3">Web Designer</h6>
							<a href="" class="social-links-profile me-1"><i class="fab fa-facebook fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-twitter fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-github fa-2x"></i></a>
						</div>
					</div>
				</div>
				
				<div class="profile col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="row mb-5">
						<div class="col-lg-5 col-md-6 col-sm-6 col-6">
							<img src="profile/photo6.jpg" 
							class="img img-fluid"
							alt="">
						</div>
						<div class="teamdc col-lg-7 col-md-6 col-sm-6 col-6 pt-3">
							<h5>Soriano, Alissa Bianca</h5>
							<h6 class="role mb-3">Web Designer</h6>
							<a href="" class="social-links-profile me-1"><i class="fab fa-facebook fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-twitter fa-2x"></i></a>
							<a href="" class="social-links-profile me-1"><i class="fab fa-github fa-2x"></i></a>
						</div>
					</div>
				</div>	
			</div>
	    </div>
	</div>
	<!--TEAM SECTION ENDS HERE-->

	<!--FAQS SECTION STARTS HERE-->
	<section class="faq_area">
		<div id="faq-heading">
			<h2>Frequently Asked Questions</h2>
			<h2>Quality is at the heart of everything we do, whether it's about books or the service we provide.</h2>
		</div>
		<div class="faq_wrapper">
		  <div class="faq_item">
			<div class="faq_title active">
				What are the benefits of a Wit Studio account? <span class="arrow"></span>
			</div>
			<div class="faq_details">
				<p>
					Wit Studio is free and open to anyone. Some features require that you have an Wit Studio account.
				   </p>
				   <p>
					1. You can borrow books from the collection.<br>
					2. No need to travel to other library branches, you can access your online library from anywhere.<br>
					3. You can get access to all the literature on the Internet with just a single click, which is very convenient for students and faculty members.<br>
					4. You will have access to a lot of information, which is not available in physical libraries. And, it is easier to find information than before with the digital library.<br>
				   </p>
			</div>
		  </div>
		  <div class="faq_item">
			<div class="faq_title">
				How do I sign up for Wit Studio Library? <span class="arrow"></span>
			</div>
			<div class="faq_details">
				<p>
					To create your Open Library account, click the ???log in??? link at the top right corner of our home page, then "register". You will be prompted to enter the following information:
				   </p>
				   <ul>
					<li>First name</li>
					<li>Last Name</li>
					<li>Email Address</li>
					<li>Password</li>
				 </ul>
				   <p>
					We use your email address to administer your account. You must also agree to the terms and conditions.
					Click ???register??? when you are finished. Once you are registered, click the ???log in??? link at the top to have access with the digital library.
				   </p>
			</div>
		  </div>
		  <div class="faq_item">
			<div class="faq_title">
				Can I access the digital online library from home? <span class="arrow"></span>
			</div>
			<div class="faq_details">
				<p>
					You can access the digital online library from home. You can access the library from any of your devices, including your computer, tablet or smartphone.
					You can use the same library account to log into both your library computer and all other devices that you use at home.
				   </p>
			</div>
		  </div>
		  <div class="faq_item">
			<div class="faq_title">
				I have a book that I think might be worth something. Can you tell me what it's worth?
			  <span class="arrow"></span>
			</div>
			<div class="faq_details">
			  <p>
				Unfortunately, we can not. We have no expertise in the valuation of books. You should try to find a website that specializes in used or rare books. If you don't know of one, just ask at your favorite bookshop. You can also search for the book on a site like bookfinder.com, to see if there are copies of the book on the market. The prices there will give you some sense of the book's value, but the value of rare books can only be determined by physical inspection.
			  </p>
			</div>
		  </div>
		  <div class="faq_item">
			<div class="faq_title">
				Can you tell me more about a particular book? <span class="arrow"></span>
			</div>
			<div class="faq_details">
			  <p>
				You can access the digital online library from home. You can access the library from any of your devices, including your computer, tablet or smartphone.
				You can use the same library account to log into both your library computer and all other devices that you use at home.
			  </p>
			</div>
		  </div>
		</div>
	  </section>
	<!--FAQS SECTION ENDS HERE-->

	<!--SCROLL TO TOP-->
	<a href="#" id="scrollTop">Scroll</a>
		
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