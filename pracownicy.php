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
<a class="nav_link" href="formularz.html">Formularz</a><br />
</div>
   
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Pracownicy</b></h1>

</html>


<?php
echo ("<h2><p>zadanie 1 - Pracownicy tylko z działu 2</p></h2>");
$result = $conn->query('SELECT  * FROM pracownicy WHERE dzial=2');
echo("<table border>");
echo("<table>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
echo("<th>data urodzenia</th>");
while($row = $result->fetch_assoc()) {
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
echo("</tr>");
}
echo("</table>")
?>


<?php
echo ("<h2><p>zadanie 2 - Pracownicy tylko z działu 2 i z działu 3</p></h2>");
$result = $conn->query('SELECT * FROM pracownicy WHERE (dzial=2 OR dzial=3)');
echo("<table border>");
echo("<table>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
echo("<th>data urodzenia</th>");
while($row = $result->fetch_assoc()) {
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
echo("</tr>");
}
echo("</table>")
?>


<?php
echo ("<h2><p>zadanie 3 - Pracownicy tylko z zarobkami mniejszymi niż 30</p></h2>");
$result = $conn->query('SELECT * FROM pracownicy WHERE zarobki<30');
echo("<table border>");
echo("<table>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
echo("<th>data urodzenia</th>");
while($row = $result->fetch_assoc()) {
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
echo("</tr>");
}
echo("</table>")
?>
