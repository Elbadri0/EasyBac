 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "easybac";
session_start();

$userClient = $_SESSION["user"];
$newName = $_POST['newName'];
$newemail = $_POST['newemail'];
$newp = $_POST['newPassword'];
$newage = $_POST['newage'];
$newPic = $_POST['newPic'];
$newschool = $_POST['newmSchool'];
$newpro = $_POST['newmProfessoin'];




try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo $userClient;
    

   $sql = " UPDATE utilisateur
SET fullName = ".(!empty($newName) ? "'$newName'" : 'fullName').",e_mail = ".(!empty($newemail) ? "'$newemail'" : 'e_mail').",     age = ".(!empty($newage) ? "'$newage'" : 'age')."          , mot_d_passe = ".(!empty($newp) ? "'$newp'" : 'mot_d_passe')."    , photo = ".(!empty($newPic) ? "'$newPic'" : 'photo')."    ,  School = ".(!empty($newschool) ? "'$newschool'" : 'School')."
,  profession = ".(!empty($newpro) ? "'$newpro'" : 'profession')."

WHERE e_mail='$userClient' ;";



    $conn->exec($sql);

    echo "welcome as new member"; 
    header("location://localhost/EasyBac/profil.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>