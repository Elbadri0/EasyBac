<!DOCTYPE HTML>
<html>
	<head>
		<title>EasyBac-your BAC take it easy...</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assetHome/css/main.css" />
		<link href="img/logo2.png" rel="icon">

<!---------------------------------------------------------------------------------->
		  <!-- Google Fonts -->
		  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

		  <!-- Bootstrap CSS File -->
		  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		  <!-- Libraries CSS Files -->
		  <link href="lib/animate/animate.min.css" rel="stylesheet">
		  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
		  <style> #border{ border-color: black; border-style: solid; } </style>
<!---------------------------------------------------------------------------------->

	</head>
	<body class="is-preload" style="background-color:   #f3f3f3 " >

		<!-- Header -->
			<header id="header" style="background-color:  #303435 ;">
				<img src="img/logo.png" width="5%" height="97%" alt="No photo">
				<a class="logo" href="Home.php">Easy BAC, &nbsp;&nbsp; This year is your BAC?...Take it easy! </a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu" style="background-color:  #39e5c1 ; color: white">
				<ul class="links">
                   <a href="profil.php"><center><img src="img/profil.png" width="40%" height="40%" alt="No photo" style="padding-top: 0.8em; border-radius: 50em" title="Cliquer sur l'image pour arriver à votre profil">
                   	<?php 
                          session_start();

if(isset($_SESSION['user'])){
        echo '<span  >Hello ' .$_SESSION['user']. ' </span>';}
else{
		echo '<span class="email-icon">none</span>';
}
                          ?></center></a><br>

					<li><a href="Home.php"><strong> Home</strong> </a></li>
					<li><a href="cours.php"><strong>Espace Cours</strong> </a></li>
					<li><a href="Exam.php"><strong>Espace Exams</strong> </a></li>
					<li><a href="Forum.php"><strong>Forum</strong> </a></li>
  <hr>
                    <li class="nav-item">
                      <center><a class="nav-link" href="index.php"><button style="font-size:20px;" ><i class="fas fa fa-sign-out fa-2x mr-2"></i></button></a></center>
                    </li>

				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner" style="background-color:  #35f3cb ; opacity: 0.9;">
				<div class="inner" style="color: white;">
					<h1><strong> Easy BAC</strong> </h1>

					


					<p>Avec vous pour vous accompagner dans l'année exceptionnelle de votre vie. Avec notre équipe bien choisie, apprenez comment bien gérer votre temps et effort. Et parce que il ne s'agit pas de combien, mais du comment!! on est là pour vous...</p>
				</div>
				<video autoplay loop muted playsinline src="imgH/banner.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Pourquoi un Forum?</h2>
						<p>Les forums sont des espaces ouverts à tous, et sur tous les sujets : posez toutes vos questions et venez apporter votre expérience à d'autres étudiants ! L'inscription n'est pas obligatoire, mais elle permet plus d'interactions. 
						Les forums constituent un lieu d'échange étudiant ouverts à tous. Cet espace de discussion vise à :</p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="#" ><br><i class="fa fa-handshake-o fa-5x" aria-hidden="true" ></i><br><br></a>
									<h3>1er Objectif</h3>
								</header>
								<p>Encourager les échanges entre les visiteurs du site sur les grands sujets étudiants.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
								    <a href="#" ><br><i class="fa fa-comments fa-5x" aria-hidden="true" ></i><br><br></a>	
									<h3>2ème Objectif</h3>
								</header>
								<p>Fournir à tous une tribune d’expression pour commenter, critiquer, compléter le contenu éditorial du site.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" ><br><i class="fa fa-flag fa-5x" aria-hidden="true" ></i><br><br></a>
									<h3>3ème Objectif</h3>
								</header>
								<p>En aucun cas le forum ne peut être le lieu d'expression d'opinions à caractère raciste, religieux, politiques, diffamatoire, grossier ou injurieux.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" ><br><i class="fa fa-book fa-5x" aria-hidden="true" ></i><br><br></a>
									<h3>Espace Cours</h3>
								</header>
								<p>Les cours PDF sont généralement pour les élèves qui rencontrent des difficultés dans une ou plusieurs matières, ou bien sont en retard dans leurs révisions.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Espace Exams</h3>
								</header>
								<p>Des exercices pour tous les niveux avec des solutions biens explique , aussi les epreuves des annes dernieres avec leurs correction.</p>
							</div>
						</section>
						
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper" style="background-image: url(img/qst.gif); background-size: 25%;">
				<div class="inner" >
					<h2 ><strong><span style="color: #062289;">Les Questions les plus fréquentes</span> </strong> </h2><br><br>

 <!--==========================Elements Section ===============================================================================-->
    <section id="testimonials">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-8" id="border">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <h3>Demandée par: Saul Goodman</h3>
                <h4>Profil: Ceo &amp; Founder</h4>
                <p >
                  QUESTION: Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper??
                </p>
              </div>
    
              <div class="testimonial-item">
                <h3>Demandée par: Sara Wilsson</h3>
                <h4>Profil: Designer</h4>
                <p>
                  QUESTION: Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa??
                </p>
              </div>
   

            </div>
          </div>
        </div>
      </div>
    </section><!-- #testimonials -->
				</div>
			</section>
<!--========================================================================================================================= -->
		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>L'équipe</h2>
						<h4><strong>Comme on dit toujours:</strong> " Se réunir est un début, rester ensemble est un progrès... Mais travailler ensemble est la réussite. "</h4>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Agé de 20 ans, Abdelhamid est un étudiant en 1 ère année cycle d'ingénieurs, inscrit en filière génie informatique au sein de l'université Mundiapolis.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="img/team-1.jpeg" alt="" />
									</div>
									<p class="credit"><strong>ELBADRI Abdelhamid</strong><br><span>Membre d'équipe.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Agée de 20 ans, Hafssa est une étudiante en 1 ère année cycle d'ingénieurs, inscrite en filière génie informatique au sein de l'université Mundiapolis..</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="img/team-2.jpg" alt="" />
									</div>
									<p class="credit"><strong>ABERKOUKS Hafssa</strong> <span><br> Membre d'équipe.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
								<p>Le professeur Mme Samar est un doctor en informatique, directrice de l'école d'ingénieurs à Mundiapolis, ainsi que vice-présidente de l'université.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="img/team-3.jpeg" alt="" />
									</div>
									<p class="credit"><strong>Mme- Samar MOUCHAWRAB</strong><br><span>Encadrante du projet.</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section style="width: 32em;">
							<table>
								<tr><td><img src="img/bac.jpeg" width="70%" height="50%"> </td> </tr>
								<tr><td>Votre BAC est très important, mais c'est juste une ligne de départ et non pas d'arrivée, donc prenez-le doucement et surtout gardez votre concentration sur vos objectifs et non pas sur une année d'étude qui va être passer.</td> </tr>
						    </table>
						</section>
						<section style="width: 35em;">
							<h3>Notre site web "Easy BAC"</h3>
							<p>Le Site Web qui aide les étudiants du bac à se préparer pour leur examen national, en facilitant l’obtention de réponses à toutes leurs questions.<br><strong> Comment?</strong> Il sera sous-format d’un forum qui propose une alternative de questions et de réponses sur un large choix de thèmes concernant le programme du Baccalauréat (Partie de cours, exercice, examen...).</p>
						</section>
						
						<section>
							<h4>Nous Joindre sur:</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Copyright <strong>EasyBac</strong>. All Rights Reserved<br>
						Designed by <a>ELBADRI - ABERKOUKS</a>
					</div>
				
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assetHome/js/jquery.min.js"></script>
			<script src="assetHome/js/browser.min.js"></script>
			<script src="assetHome/js/breakpoints.min.js"></script>
			<script src="assetHome/js/util.js"></script>
			<script src="assetHome/js/main.js"></script>
<!---------------------------------------------------------------------------------->
					<!-- JavaScript Libraries -->
		  <script src="lib/jquery/jquery.min.js"></script>
		  <script src="lib/jquery/jquery-migrate.min.js"></script>
		  <script src="lib/easing/easing.min.js"></script>
		  <script src="lib/mobile-nav/mobile-nav.js"></script>
		  <script src="lib/wow/wow.min.js"></script>
		  <script src="lib/waypoints/waypoints.min.js"></script>
		  <script src="lib/counterup/counterup.min.js"></script>
		  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

		  <!-- Template Main Javascript File -->
		  <script src="js/main.js"></script>
<!---------------------------------------------------------------------------------->		  

	</body>
</html>