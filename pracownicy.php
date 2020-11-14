<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ewelina";

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
<a class="nav_link" href="index.php"> Strona głowna</a><br />
<a class="nav_link" href="pracownicy.php"> Pracownicy </a><br />
<a class="nav_link" href="pracownicyiorganizacja.php"> Pracownicy i organizacja </a><br />
<a class="nav_link" href="funkcjeAgregujace.php"> Funkcje agregujące </a><br />
<a class="nav_link" href="dataiczas.php"> Data i czas</a><br />
</div>
   
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Pracownicy</b></h1>

</html>


<?php
$sql = 'SELECT  * FROM pracownicy WHERE dzial=2';
echo ("<h2><p>zadanie 1 Pracownicy tylko z działu 2</p></h2>");
echo ("<p>select * from pracownicy where dzial=2");
$result = $conn->query($sql);
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

$sql = 'SELECT * FROM pracownicy WHERE (dzial=2 OR dzial=3)';
echo ("<h2><p>zadanie 2 Pracownicy tylko z działu 2 i z działu 3</p></h2>");
echo ("<p>select * from pracownicy where (dzial=2 or dzial=3)");
$result = $conn->query($sql);
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

$sql = 'SELECT * FROM pracownicy WHERE zarobki<30';
echo ("<h2><p>zadanie 3 Pracownicy tylko z zarobkami mniejszymi niż 30</p></h2>");
echo ("<p>select * from pracownicy where zarobki<30");
$result = $conn->query($sql);
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
