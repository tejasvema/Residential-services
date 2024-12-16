<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);
		//function hideURLbar(){ window.scrollTo(0,1); } 
	</script>

  <title>Home Service</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top ">
    <a href="index.php" class="navbar-brand">Residential Services</a>
    <span class="navbar-text"></span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu" >
      <ul class="navbar-nav pl-5 custom-nav font-weight-bold ">
        <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">SERVICES</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">REGISTRATION</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">LOGIN</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">CONTACT</a></li>
        <li class="nav-item"><a href="#feedback" class="nav-link">FEEDBACK</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/1.jpg);">
    <div class="myclass mainHeading">
      <br>
      <br>
      
      <h2 class="text-uppercase text-black font-weight-bold">Welcome to Residential Service</h2>
      <p class="font-italic">Quality Repair,fair pricing</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-info mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">Residential Services</h3>
      <p>
      Today in the digital world it makes user easy to get services online with a single click. The purpose of this system is the fastest services. We help clients get trusted professionals for all their service needs. our system is specialized in providing a confirmation message about the selected service. The system is versatile as service can be booked from everywhere to anywhere you desire.


      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <strong><h1>Our Services</h1></strong>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class='fas fa-desktop' style='font-size:120px'></i></a>
        <h4 class="mt-4">Electrical</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class='fas fa-screwdriver' style='font-size:120px'></i></a>
        <h4 class="mt-4">Carpentery</h4>
      </div>
     
      <div class="col-sm-4 mb-4">
        <a href="#"><i class='fas fa-user-tie' style='font-size:120px'></i></a>
        <h4 class="mt-4">Laundry Service</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class='fas fa-home' style='font-size:120px'></i></a>
        <h4 class="mt-4">Pest Cleaning</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class='fas fa-fire' style='font-size:120px'></i></a>
        <h4 class="mt-4">Water Purifier </h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class='fas fa-building' style='font-size:120px'></i></a>
        <h4 class="mt-4">Office Cleaning</h4>
      </div>
     
      
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-info" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/happy1.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Henry</h4>
              <p class="card-text">There is a spiritual aspect to our lives.
                when a business does something good for somebody, 
                 that somebody feels good about them!</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/happy3.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Emma</h4>
              <p class="card-text">“Client service is about excellence and 
                integrity above all else and it should be a continually evolving process.”</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/th.jpeg" class="img-fluid" style="border-radius: 1000px;">
              <h4 class="card-title">Broka</h4>
              <p class="card-text">“Good customer service begins at the top. If your senior people don’t get it, 
                even the strongest links further down the line can become compromised.”</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/happy4.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Racheal</h4>
              <p class="card-text"> “Setting customer expectations at a
                 level that is aligned with consistently deliverable levels of 
                 customer serviceworks in harmony with your brand image.” 

              </p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
     
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid blue;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#"  class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#"  class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#"  class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#"  class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#"  class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by RS &copy;.
          </small>
        
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>