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
?>

<!DOCTYPE html>
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
<a class="nav_link" href="insert.php">Insert</a><br />
<a class="nav_link" href="daneDoBazy.php">Dane do bazy</a><br />
<a class="nav_link" href="petla.php">Pętla</a><br />    
<a class="nav_link" href="delete.php">Delete</a><br /> 
<a class="nav_link" href="ksiazki.php">Książki</a><br /> 
</div>
   
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Książki</b></h1>


</html>

<?php
echo("<h2>Autorzy</h2>");
$result=$conn->query(SELECT * FROM bibliotekaAutor);
echo("<table>");
echo("<th>id</th>");
echo("<th>Autor</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_autor"]."</td><td>".$row["Autor"]."</td>");
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = ("SELECT * FROM bibliotekaTytuł");
echo("<h2>Tytuły książek</h2>");
$result=$conn->query($sql);
echo("<table>");
echo("<th>id</th>");
echo("<th>Tytul</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_tytuł"]."</td><td>".$row["Tytuł"]."</td>");
echo("</tr>");
}
echo("</table>");
?>