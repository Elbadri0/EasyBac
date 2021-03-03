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
  <link href="css/style2.css" rel="stylesheet">
       
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
</head>





<body>
  
<!--========================== Header =========================================================================-->
<header class="header text-center">     


<h1 class="blog-name pt-lg-4 mb-0" style=" padding: 70;"><a href="index.html">Mon Profil</a></h1>
<nav class="navbar navbar-expand-lg navbar-dark" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navigation" class="collapse navbar-collapse flex-column" >
            <div class="profile-section pt-3 pt-lg-0">
                  
       
<?php 
                          session_start();

                          ?>

    <?php


          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "easybac";


          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
$sql = "SELECT fullName,profession,photo FROM utilisateur WHERE e_mail='".$_SESSION['user']."'";

          $result = $conn->query($sql);


          if (mysqli_num_rows($result)>0){
              
              while($row = $result->fetch_assoc()) {
echo "<img class='profile-image mb-3 rounded-circle mx-auto' src='img/clients/". $row["photo"]."' alt='image' > 
<div class='bio mb-3'><h3><strong> " . $row["fullName"]. " </strong> </h3><h6 style='font-size: 0.9em;'><br>" . $row["profession"]. " </h6> </div>"

;
              } 
          } else {
              echo "---0";
          }
          $conn->close();
    ?>

                         
                 
                  <hr> 
            </div><!--//profile-section-->
            <ul class="navbar-nav flex-column text-left">
                      <li class="nav-item">
                          <a class="nav-link" href="Home.php"><i class="fas fa-home fa-fw mr-2"></i>L'accueil<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="profil.php"><i class="fas fa-user fa-fw mr-2"></i>Mon Profil</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="cours.php"><i class="fas fa fa-book fa-fw mr-2"></i>Espace Cours</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="exam.php"><i class="fas fa fa-suitcase fa-fw mr-2"></i>Espace Exams</a>
                      </li>
                      
            </ul>   
      </div>
</nav>


</header>

<!--==========================2 ème colomn =====================================================================-->
  
<div class="main-wrapper">

<!-- Section 1: c'est le header -->
<section style="background-color: rgb(211,211,211); color: black;"><br>
<div class="container">
        <div id="topbar">
              <div class="container">
                    <h3 style="color: rgb(150,150,150);"><a href="#header" class="scrollto"><img src="img/logo1.png" width="9%" height="9%" alt="" class="img-fluid"></a><span><strong>&nbsp; Easy BAC</strong> </span> </h3>
              </div> 
        </div><hr>
</div></section>


<!-- Section 2: le milieu -->
<section >
<div class="container">   

<main id="main">
<div class="container">
    
  <form method="get" action="editProfil.php">
  <div class="row">

      <center>  <table style="border-color: black;"><tr>
                  
    <?php


          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "easybac";


          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
$sql = "SELECT e_mail,School,photo,fullName,age,profession,points FROM utilisateur WHERE e_mail='".$_SESSION['user']."'";

          $result = $conn->query($sql);


          if (mysqli_num_rows($result)>0){
              
              while($row = $result->fetch_assoc()) {
echo "<td> <img id='blah' src='img/clients/".$row["photo"]."' alt='your image' style='width:200px;height:200px;' /> <br></td> <td></td>
                  <td><h2 style='margin-left: 20px'>" . $row["fullName"]. "<br> <br><input type='submit'  style='margin-left: 19px' class='btn btn-primary' value='Modifier vos infos'></h2></td></tr></table> <br><hr>
                            <table >

<tr> <td>
               <strong>Email: </strong> " . $row["e_mail"]. " </td> </tr>
               <tr><td> <strong>School: </strong> " . $row["School"]. "</td> </tr>
               <tr><td><strong>Age: </strong>" . $row["age"]. "</td> </tr>
               <tr><td><strong>Profession: </strong>" . $row["profession"]. "</td> </tr>";
              } echo "</table>";
          } else {
              echo "---0";
          }
          $conn->close();
    ?>

               

<br><hr><br>
         <table width="100%"> <tr><td>
                <div style="text-align: center;">
                    <h2><strong> 20,7K </strong></h2>                    
                    <p><small>Question</small></p>
                </div></td>

               <td><div style="text-align: center;">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Réponses</small></p>
                  </div></td>

               <td><div style="text-align: center;">
                    <h2><strong>43</strong></h2>                    
                    <p><small>J'aime</small></p>
               </div></td></tr>
        </table></center>     
  </div> 
  </form>
</div>
</main>



<!--Footer -->
    <?php include('Footer.php');?>
 <!-- /Footer--> 



</div></section></div>
<!--============================================================================================================-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!--------------------------------------------------------------------------------------------------------------->

    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choisir une Couleur</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1  active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->


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
        <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script> 


</body>
</html>
