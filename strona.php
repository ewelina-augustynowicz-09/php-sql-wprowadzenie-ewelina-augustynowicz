<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="button"><a href="https://github.com/ewelina-augustynowicz-09/sql-php-wprowadzenie">github</a></div><br>
<a class="nav_link" href="index.php"> Strona głowna</a><br />
<a class="nav_link" href="pracownicy.php"> Pracownicy </a><br />
<a class="nav_link" href="pracownicyiorganizacja.php"> Pracownicy i organizacja </a><br />
<a class="nav_link" href="funkcjeAgregujace.php"> Funkcje agregujące </a><br />
<a class="nav_link" href="dataiczas.php"> Data i czas</a><br />
<a class="nav_link" href="formularz.html">Formularz</a><br />
</div>
   
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Jesteś na strona.php</b></h1>


</html>

<?php

echo($_POST["imie"]);
echo($_POST["nazwisko"]);
     
?>

<?php

$servername = "mysql-ewelina.alwaysdata.net";
$username = "ewelina";
$password = "ewelinailukas";
$dbname = "ewelina_09";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


require_once("connect.php");
	$sql = "INSERT INTO pracownicy(`imie`, `nazwisko`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['nazwisko']."')";
	if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  New record created successfully!</p>");
      } else {
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      }
      

?>
