<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="img/logo2.png" rel="icon">
    <title>EasyBac-your BAC take it easy...</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='/EasyBac/assetCr/style.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/nav.css">



</head>

<body>

<!-- HEADER ------------------------------------------------------------>

		<div id="wrapper-header" style="background-color: rgb(183, 232, 251);">
			<div id="main-header" class="object">
				<div><img src="img/logo.png" alt="logo" width="5%" height="5%">
				<a class="logo" href="Home.php" style="color: white; align-items: center; margin-left: 4em; font-family: calibri; padding-top: 0.3em;"><strong>Easy BAC, &nbsp;This year is your BAC?...Take it easy!</strong> </a>
		        <div id="main_tip_search"> 
					<form>
						<input type="text" name="search" id="tip_search_input" list="search" autocomplete=on required placeholder="Taper votre recherche">
					</form>
				</div></div>
				
		    </div>
		</div>
<!-- NAVBAR ----------------------------------------------------------->

<div id="wrapper-navbar" style="background-color:  #9ad6dd;">
		<div class="navbar object">
    		<div id="wrapper-sorting">
            <div id="wrapper-title-1">
            <div class="top-rated object" style="font-size: 18px">Tous nos Cours |</div>
    		</div>
            
            </div>
            <div id="wrapper-bouton-icon">

            	<div id="bouton-ai"><a href="home.php"><img src="img/home.png" title="Home" height="28" width="28"></a></div>
            	<div id="bouton-psd"><a href="Profil.php"><img src="img/profil.png"  title="Profil" height="28" width="28"></a></div>
            	<div id="bouton-theme"><a href="Cours.php"><img src="img/cours.png" title="Cours" height="28" width="28"></a></div>
            	<div id="bouton-font"><a href="Exam.php"><img src="img/exam.png" title="Exercises & Exams" height="28" width="28"></a></div>
            	<div id="bouton-photo"><a href="Forum.php"><img src="img/forum.jpg" title="Forum" height="28" width="28"></a></div>
            	
			</div>
    	</div>
    </div>

<!--- COURS --------------------------------------------------------------------->	

		<div id="wrapper-container">
		    
				<div class="container object">



					<div id="main-container-image">
		                       
		<section class="work">
								


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

       $sql = "SELECT titre ,description,  cours ,front_img ,type_cours FROM cours ";

          $result = $conn->query($sql);


          if (mysqli_num_rows($result) > 0){
              
              while($row = $result->fetch_assoc()) {
              		echo "   <figure class='white'>
									<a href='http://exo7.emath.fr/cours/cours-exo7.pdf'>
										<img src=' " . $row["front_img"]. " ' alt=''/>
										<dl>
											<dt>" . $row["titre"]. "</dt>
											<dd>" . $row["description"]. "</dd>	
										</dl>
									</a>
		                            <div id='wrapper-part-info'>		                           
		                            	<div id='part-info'>" . $row["type_cours"]. "</div>
									</div>
		                        </figure>  ";


                   
              } 
          } else {
              echo "---0";
          }
          $conn->close();
    ?>



								

			</section>


		                    
					</div>	
		            	    
				</div>




     
<!-- AVANT FOOTER ==============================================================================================-->		            
			<div id="wrapper-thank" style="background-color:   #eceef5  ">
		    	<div class="thank">
		        	<div class="thank-text">Easy'<span style="letter-spacing:-5px;">B</span>AC</div>
		    	</div>
			</div>
<!---------------------------------------------------------------------------------->			    
			<div id="main-container-footer" style="background-color: #1f1f1f">
				<div class="container-footer">
		        	
		            <div id="row-1f">
		            	<div class="text-row-1f">
		            		<span style="font-weight:800;font-size:23px;color:blue;">Easy BAC<br></span><br>
		            		<img src="img/bac.jpeg" width="50%" height="30%" style="float: left;"><br><br><br><br>
		            		<p>Le Site Web qui aide les étudiants du bac à se préparer pour leur examen national, en facilitant l’obtention de réponses à toutes leurs questions.</p> </div>
		            </div>
		            
		            <div id="row-2f">
		            	<div class="text-row-2f"><span style="font-weight:800;font-size:18px;color:#666">Comment?<br></span><br>Il sera sous-format d’un forum qui propose une alternative de questions et de réponses sur un large choix de thèmes concernant le programme du Baccalauréat (Partie de cours, exercice, examen...).</div>
		            </div>
		            
		            <div id="row-3f">
		            	<div class="text-row-3f"><span style="font-weight:800;font-size:18px;color:#666;">Nous Joindre Sur :</span><br><p><b> Adresse:</b><br>
                            A108 Bd Ibrahim ROUDANI, Anfa <br>
                            Casabalnca, NY 535022<br>
                            MAROC <br><br>
                            <strong>Phone:</strong> +212 6589 554 88<br>
                            <strong>Email:</strong> info@EasyBac.ma
                           </p></div>
		            </div>
		            
		            <div id="row-4f">
		            	<div class="text-row-4f"><span style="font-weight:800;font-size:19px;color:#666;">Laisser un message<br></span><br>Vous avez une réclammation, une demande d'information ou d'aide, vous aimerez exprimer votre avis concernant un de nos services...</div>

						<div id="main_tip_newsletter"> 
							<form action="">
								<input type="text" name="msg" id="tip_newsletter_input" list="newsletter" autocomplete=off required placeholder="Votre message ici" style="color: grey;">
								<center><br><button style="background-color: #3f3f3f; color: white; padding: 0.2em 0.2em 0.2em 0.2em">Envoyer</button></center>
							</form>
						</div>
		            </div>
		            
				</div>
			</div>
		    
		    
		    <div id="wrapper-copyright">
				<div class="copyright">
		    		<div class="copy-text object">Copyright © 2020. Designed by <a style="color:#D0D1D4;" href="https://designseer.com/">EL-BADRI & ABERKOUKS</a></div>
		    		
					<div class="wrapper-navbouton">
		    			<div class="google object">g</div>
		    			<div class="facebook object">f</div>
		    			<div class="linkin object">i</div>
		    			<div class="dribbble object">d</div>
		    		</div>
		    	</div>
		    </div>

		</div>

<!-------------------------------------------------------------------------------------------------------->

		<!-- SCRIPT -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="/EasyBac/assetCr/js/main.min.js"></script>
			
		<script>
		/* PRELOADER */
		
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function() {
					if (oldonload) {
						oldonload();
					}
					func();
				}
			}
		}
		addLoadEvent(preloader);
		</script>

</body>
</html>