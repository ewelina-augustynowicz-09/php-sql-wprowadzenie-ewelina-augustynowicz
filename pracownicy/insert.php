<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Insert</title>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="container">
            <div class="item colorBlue">
        <h2>Ewelina Augustynowicz klasa 2Ti grupa 2 numer 1</h2>
        <h1><b>Insert</b></h1> 
      </div> 
    <div class="item colorRed">
        <div class="nav">
          <h2> Menu:</h2>
          <ul>
            <li><a href="https://github.com/ewelina-augustynowicz-09/sql-php-wprowadzenie">github</a></li>
            <br>
            <li><a class="nav_link" href="index.php"> Strona głowna</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/pracownicy.php"> Pracownicy </a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/pracownicyiorganizacja.php"> Pracownicy i organizacja </a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/funkcjeAgregujace.php"> Funkcje agregujące</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/dataiczas.php"> Data i czas</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/formularz.html">Formularz</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/insert.php">Insert</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/daneDoBazy.php">Dane do bazy</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/petla.php">Pętla</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/delete.php">Delete</a></li>
            <br>
            <li><a class="nav_link" href="biblioteka/ksiazki.php">Książki</a></li>
          </ul> 
      </div> 
      </div>
    
<div class="item colorGreen">
<?php
echo("jestes w insert.php");
echo $_POST['name'];

$servername = "mysql-ewelina.alwaysdata.net";
$username = "ewelina";
$password = "Ewelina@123456";
$dbname = "ewelina_ewelina";

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
	    </div>
	  </div>
	  </div>
</html>
