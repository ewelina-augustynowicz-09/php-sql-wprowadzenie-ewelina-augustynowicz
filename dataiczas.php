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
</div>
   
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Data i czas</b></h1>

</html>

<?php
echo("<h2><p>zadanie 8 - Ile kobiet pracuje łącznie w działach 1 i 3</p></h2>");  
$result = $conn->query('SELECT count(imie) as ilosc from pracownicy where imie like "%a" and (dzial=1 or dzial=3)');
echo("<table>");
echo("<th>Ilość</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["ilosc"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
