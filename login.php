<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Tagore Public School</title>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top shadow">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
           <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-fluid"></a>
              <div class="collapse navbar-collapse" id="Navbar">        
                <ul class="navbar-nav" style="padding-left: 10px;">
                    <li class="nav-item"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="dropdown">
                      <a class="nav-link dropbtn"><span class="fa fa-info fa-lg"></span> About Us</a>
                      <div class="dropdown-content">
                         <a href="aboutus.php">Acedamics</a>
                         <a href="faculty.php">Faculty</a>
                         <a href="aim.php">Aim &amp; Vision</a>
                      </div>
                    </li>
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-sign-in fa-lg"></span> Login</a></li>
                    <li class="dropdown">
                      <a class="nav-link dropbtn"><span class="fa fa-group fa-lg"></span> Admission</a>
                      <div class="dropdown-content">
                         <a href="registration.php">Registration</a>
                         <a href="admissionprocess.php">Admission Process</a>
                         <a href="feestructure.php">Fee structure</a>
                      </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="./facilities.php"><span class="fa fa-list-alt fa-lg"></span> Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="./gallery.php"><span class="fa fa-picture-o fa-lg"></span> Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
              </div>            
        </div>
    </nav>

    <header class="jumbotron hidden-sm-down">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 align-self-center">
                    <h1>TAGORE PUBLIC HIGH SR. SEC. SCHOOL</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">Login</li>
            </ol>

            <div class="col-12">
               <h3>Login </h3>
               <hr>
            </div>
        </div>
    </div>


      <div class="container">
        <div class="row justify-content-center">
          <img class="img-fluid " src="images/login.png">
        </div>
      <div class="col-12 col-md-9">
                <form style="margin-top: 3%" action="form2.php">

                     <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">Username</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password...">
                        </div>
                    </div>

                    <div class="form-group row offset-md-2">
                        <a href="#"> Forget your password ? </a>
                    </div>     


                    <div class="form-group row">
                        <div class="offset-md-2 col-md-6">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                        
                    </div>
        
                </form>
            </div>
        </div>


    <footer class="footer" style="margin-top: 30px">
        <div class="container">
            <div class="row ">             
                <div class="col-5 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" style="color: white">Home</a></li>
                        <li><a href="./aboutus.php" style="color: white">About</a></li>
                        <li><a href="./facilities.php" style="color: white"></a>Facilities</li>
                        <li><a href="./contactus.php" style="color: white">Contact</a></li>
                    </ul>
                </div>

                <div class="col-6 col-sm-5">
                    <h5>Our Address</h5>
                    <address class="address">
		              TAGORE PUBLIC SCHOOL<br>
		              Shastri Nagar Tagore Lane, Shastri Nagar Road,<br>
		              Hazi Colony,Subhash Nagar,Jaipur<br>
                      <i class="fa fa-phone fa-lg"></i>: 9116378333 , 9116379333<br>
                      <i class="fa fa-fax fa-lg"></i>: +9116378333<br>
                      <i class="fa fa-envelope fa-lg"></i>: 
                      <a href="mailto:info@spsjaipur.com" style="color: white">info@spsjaipur.com</a>
		            </address>
                </div>

                <div class="col col-sm-4 align-self-center">
                    <div style="text-align:center">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:gurvsxen143@gmail.com"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>

           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2015- All Rights Reserved </p>
                </div>
           </div>
        </div>
    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/tether/dist/js/tether.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>