<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EasyBac-your BAC take it easy...</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo2.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  

<!--========================== Header =========================================================================-->

  <header id="header" style="background-color: rgb(183, 232, 251);">

    <div id="topbar">


      <div class="container">

        <div class="logo float-left">
            <h1 class="text-light">
                <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
                <span><strong>Easy BAC</strong> </span> 
           </h1>
        </div>
      </div>
    </div>

    <div class="container">
      <nav class="main-nav float-right d-none d-lg-block">
         <ul>
          <li class="active"><a href="index.php">Retourner à l'accueil</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>

  </header><!-- #header -->

<!--==========================  Intro Section   =======================================================================-->
 

     <section id="news-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="col">   
                        <div class="login"> <br><br><br><br><br>
                              <h1 style="text-align: center;">Login</h1>
                              <center> <img src="img/door.png " style="border-color: black;"><br></center> <br>

                             <form  action="/EasyBac/php/accessLogin.php" method ="post" name="login">
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="password" placeholder="Password" required="" id="pass" />
     <br> <input type="checkbox" onclick="viewPassFunction()"> <span> Show Password </span><br><br>
         <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>  
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 
             

                             </form>

                         </div>
                    </div>


                    <div class="col">
                         <div class="news-sidebar">
                              <div class="signin">
                                <br><br><br><br><br>
                                   <h1 style="text-align: center;" >signin</h1>

         <form  action="/EasyBac/php/accessSignin.php" method ="post" name="signin" onsubmit="return checkForm(this);">
         <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" /><br>
         <input type="text" class="form-control" name="name" placeholder="full name" required="" autofocus="" /><br>
         <input type="text" class="form-control" name="profession" placeholder="proffesion" required="" autofocus="" /><br>
         <input type="numbers" class="form-control" name="age" placeholder="age" required="" autofocus="" /><br>
         <input type="password" class="form-control" name="password" placeholder="Password" required="" onkeyup='check();' id="password" /> 
         <a style="font-style: oblique;  font-size: 12px;">Passwords must contain at least six characters, including uppercase, lowercase letters and numbers.</a><br>

<input type="password" class="form-control" name="confirmePassword" placeholder="confirme Password" required=""onkeyup='check();' id="confirm_password" />
      <span id='message'></span> <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Signin</button>   


    <br>  
        
                                  </form>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

<br><br><br><br>

  


 <!--========================== Footer ============================-->
  <footer id="footer" class="section-bg">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>EasyBac</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a>ELBADRI - ABERKOUKS</a>
      </div>
    </div>

  </footer><!-- #footer -->




  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/functions.js"></script>

</body>
</html>
