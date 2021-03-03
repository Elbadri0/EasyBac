 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "easybac";


$name = $_POST['name'];
$email = $_POST['email'];
$PasswordClient = $_POST['password'];
$age = $_POST['age'];
$profession = $_POST['password'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into utilisateur (fullName,e_mail,mot_d_passe,age,profession)
    VALUES ('$name','$email','$PasswordClient','$age','$profession')";

   $conn->exec($sql);
    echo "welcome as new member";
    session_start();
    $_SESSION["user"]=$name;
    header("Location: /EasyBac/home.php");

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
