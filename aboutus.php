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

    <title>About Us</title>

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
                    <li class="nav-item"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="dropdown active">
                      <a class="nav-link dropbtn"><span class="fa fa-info fa-lg"></span> About Us</a>
                      <div class="dropdown-content">
                         <a href="aboutus.php">Acedamics</a>
                         <a href="faculty.php">Faculty</a>
                         <a href="aim.php">Aim &amp; Vision</a>
                      </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="login.php"><span class="fa fa-sign-in fa-lg"></span> Login</a>
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

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-9 align-self-center">
                    <h1>TAGORE PUBLIC HIGH SR. SEC. SCHOOL</h1>
                </div>
            </div>
        </div>
    </header>

     <div id="header">
 <div class="w3-container">


<div class="w3-content w3-section">
  <img class="mySlides w3-animate-top" src="images/tagore-public-school-aggar-nagar-ludhiana-9723f.jpg" height=350px width=100%>
  <img class="mySlides w3-animate-bottom" src="images/19_835144578_IMG9933.JPG" height=350px width=100%>
  <img class="mySlides w3-animate-top" src="images/26_720202470_DSC0403.JPG"height=350px width=100%>
   <img class="mySlides w3-animate-top" src="images/tagore-public-school-naraina-delhi-2.png" height=350px width=100%>
    <img class="mySlides w3-animate-top" src="images/PHS_4519.jpg"height=350px width=100%>
    <img class="mySlides w3-animate-top" src="images/1.jpg.jpg" height=350px width=100%>
    <img class="mySlides w3-animate-top" src="images/3.jpg.jpg" height=350px width=100%><img class="mySlides w3-animate-bottom" src="images/computer_lab-2.jpg" height=350px width=100%>

 <img class="mySlides w3-animate-bottom" src="images/GPS_Facility_2.jpg" height=350px width=100%>
 <img class="mySlides w3-animate-bottom" src="images/4.png.png" height=350px width=100%>
 <img class="mySlides w3-animate-bottom" src="images/seedling-school5.jpg" height=350px width=100%>

               
</div>

</div></div>

 
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">About Us</a></li>
                <li class="breadcrumb-item active">Acedamics</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row row-content align-items-center" style="background:#C4EBFF;">
            <div class="col-sm-4 push-sm-8 col-md-3 push-md-9">
                <h3>Campus</h3>
            </div>
            <div class="col-sm pull-sm-4 col-md pull-md-3 ">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                         src="images/campusImg.jpg" alt=""  height="130px" width="25%">
                    <div class="media-body align-self-center">
                        <p> MSMSV is set on a fifteen acre land in the heart of Jaipur and is proud of its lush lawns, assorted plants and flowers which bring students closer to nature..</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row row-content align-items-center" style="background:#F0FAFF;">
            <div class="col-sm-4 col-md-3">
                <h3>Community Service</h3>
            </div>
            <div class="col-sm col-md">
                <div class="media">

                    <div class="media-body  align-self-center">
                        <p >School fulfills its commitment to community service in several ways. One of the initiatives in this direction is the adoption of a school in the village on the outskirts of Jaipur. The village school is managed by MSMSV and is an extension of our educational programme to provide a common platform for development of students of the two schools through regular interaction and cooperative learning strategies.</p>
                    </div>
                    <img class="d-flex img-thumbnail align-self-center ml-3" src="images/communityServiceImg.jpg" alt=""  height="130px" width="25%">
                </div>

            </div>
        </div>

        <div class="row row-content align-items-center" style="background:#C4EBFF;">
            <div class="col-sm-4 col-md-3 flex-last">
                <h3>Affiliation</h3>
            </div>
            <div class="col-sm col-md flex-first">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                         src="images/affiliationImg.jpg" alt=""  height="130px" width="25%" >
                    <div class="media-body  align-self-center">
                        <p >The Vidyalaya is afiliated to the Central Board of Secondary Education, New Delhi.
                         </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-content align-items-center" style="background:#F0FAFF;">
            <div class="col-sm-4 col-md-3">
                <h3>Faculty</h3>
            </div>
            <div class="col-sm col-md">
                <div class="media">

                    <div class="media-body align-self-center">
                        <p >At MSMSV there is a tradition of mentorship with students. A strong bond of student-teacher relationship is fostered through positive and constructive attitude of all stakeholders. The staff is well qualified and committed to their calling ready to rise to the occasion, open to change and determined to make a difference in young lives. </p>

                    </div>
                    <img class="d-flex img-thumbnail align-self-center ml-3" src="images/facultyImg.jpg" alt=""  height="130px" width="25%" >
                </div>

            </div>
        </div>

        <div class="row row-content align-items-center"  style="background:#C4EBFF;">
            <div class="col-sm-4 col-md-3 flex-last">
                <h3>Parent Teacher Interaction</h3>
            </div>
            <div class="col-sm col-md flex-first">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                         src="images/parentTeacherInteractionImg.jpg" alt=""  height="130px" width="25%" >
                    <div class="media-body  align-self-center">
                        <p >Education is the joint responsibility of teachers and parents. The interaction between the two is facilitated through Open House meetings at regular intervals.
                         </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-5 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php" style="color: white">Home</a></li>
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
                <div class="col-sm align-self-center">
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