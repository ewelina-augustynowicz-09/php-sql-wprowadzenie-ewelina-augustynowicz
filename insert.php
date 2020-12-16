<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Strona główna</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container"

<div class="item colorRed">
  <ul>
  <div class="button"><a href="https://github.com/ewelina-augustynowicz-09/sql-php-wprowadzenie">github</a></div>
  <br>
  <br>
  <a class="nav_link" href="index.php"> Strona głowna</a>
  <br>
  <br>
  <a class="nav_link" href="pracownicy.php"> Pracownicy </a>
  <br>
  <br>
  <a class="nav_link" href="pracownicyiorganizacja.php"> Pracownicy i organizacja </a>
  <br>
  <br>
  <a class="nav_link" href="funkcjeAgregujace.php"> Funkcje agregujące </a>
  <br>
  <br>
  <a class="nav_link" href="dataiczas.php"> Data i czas</a>
  <br>
  <br>
  <a class="nav_link" href="formularz.html">Formularz</a>
  <br>
  <br>
  <a class="nav_link" href="insert.php">Insert</a>
  <br>
  <br>
  <a class="nav_link" href="daneDoBazy.php">Dane do bazy</a>
  <br>
  <br>
  <a class="nav_link" href="petla.php">Pętla</a>
  <br>
  <br>
  <a class="nav_link" href="delete.php">Delete</a> 
  <br>
  <br>
  <a class="nav_link" href="ksiazki.php">Książki</a>
  </ul>

  
<div class="item colorBlue">
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Insert</b></h1>
</html>


<?php
echo("jestes w insert.php");
echo $_POST['name'];

$servername = "mysql-ewelina09.alwaysdata.net";
$username = "ewelina09";
$password = "Ewelina@123456";
$dbname = "ewelina09_09";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<?php

echo("<li>imię: ".$_POST['imie']."</li>");
echo("<li>dział: ".$_POST['dzial']."</li>");
echo("<li>zarobki: ".$_POST['zarobki']."</li>");
echo("<li>data urodzenia: ".$_POST['data_urodzenia']."</li>");


$sql = "INSERT INTO pracownicy (`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
	
if ($conn->query($sql) === TRUE) {
echo("<p class='precord'>Nowy pracownik został dodany</p>");
header ("Location:https://ewelina09.herokuapp.com/daneDoBazy.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

