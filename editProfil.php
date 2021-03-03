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
          <li class="active"><a href="profil.php">Revenir au Profil</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>

  </header><!-- #header -->
<!--==========================  Intro Section =====================================================================-->
  

  <main id="main">
<div class="container">
  <div class="row">
     
      
      <!-- edit form column -->
      <div class="col personal-info">
        
       <br><br><br><br><br><br>

        <form class="form-horizontal" role="form" action="/EasyBac/php/profilEditing.php" method="post">
 <h2><strong>Modifier vos infos:</strong> </h2>
 
 <hr>  <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Faite <strong>ATTENTION</strong> vous pouvez plus avoir les informations précédentes après la modification.
        </div><br><br>
            

          <div class="form-group">
            <label class="col-lg-3 control-label"><strong>Photo de profil:</strong> </label>
            <div class="col-lg-8" style="text-align: center;">
                <img id="blah" src="img/profil.png" alt="your image" />
                <input type='file' name="newPic" onchange="readURL(this);" />
            </div>
          </div>

          <div class="form-group" >
            <label class="col-lg-3 control-label">Votre nom complet:</label>
            <div class="col-lg-8">
              <input class="form-control" name="newName" type="text" >
            </div>
          </div>
          
          

          <div class="form-group" >
            <label class="col-lg-3 control-label" >age</label>
            <div class="col-lg-8">
              <input class="form-control" name="newage"type="text" value="">
            </div>
          </div> 

          <div class="form-group">
            <label class="col-lg-3 control-label">E-mail:</label>
            <div class="col-lg-8">
              <input class="form-control" name="newemail" type="Email" >
            </div>
          </div>
           

          <div class="form-group" >
            <label class="col-md-3 control-label">Nom d'école :</label>
            <div class="col-md-8">
              <input class="form-control" name="newmSchool"type="text" >
            </div>
          </div>

          <div class="form-group" >
            <label class="col-md-3 control-label">Profession :</label>
            <div class="col-md-8">
              <input class="form-control" name="newmProfessoin"type="text" >
            </div>
          </div>


          <div class="form-group" >
            <label class="col-md-3 control-label">Nouveau mot de passe:</label>
            <div class="col-md-8">
              <input type="password" class="form-control" name="newPassword" placeholder="Password"  onkeyup='check();' id="password" />
            </div>
          </div>


          <div class="form-group" >
            <label class="col-md-3 control-label">Confirmer le mot de passe:</label>
            <div class="col-md-8">
                  <input type="password" class="form-control" name="confirmNewPassword" placeholder="confirme Password" onkeyup='check();' id="confirm_password" /><span id='message'></span>            
            </div>
          </div>


      
          <div class="form-group" style="text-align: center;">
            <label class="col control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-success" value="Enregistrer"> <br><br>           
              <input type="reset" class="btn btn-danger" value="Annuler">
            </div>
          </div><br><br>


        </form>

      </div>

     
            
  </div>
</div>
  

  </main>

  <!--==========================  Footer =======================================================================-->

<!--Footer -->
    <?php include('Footer.php');?>
    <!-- /Footer--> 

<!--============================================================================================================-->

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

7ek trb7
       
*****************

7ek trb7

</body>
</html>
