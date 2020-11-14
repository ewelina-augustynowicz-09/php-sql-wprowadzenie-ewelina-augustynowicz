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
<div class="button"><a href="https://github.com/ewelina-augustynowicz-09/sql-php-wprowadzenie">github</a></div>
<a class="nav_link" href="index.php"> Strona głowna</a><br />
<a class="nav_link" href="pracownicy.php"> Pracownicy </a><br />
<a class="nav_link" href="pracownicyiorganizacja.php"> Pracownicy i organizacja </a><br />
<a class="nav_link" href="funkcjeAgregujace.php"> Funkcje agregujące </a><br />
<a class="nav_link" href="dataiczas.php"> Data i czas</a><br />
</div>
   
<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Funkcje agregujące</b></h1>

</html>

<?php
$sql = 'SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial';
echo ("<h2><p>zadanie 1 - Suma zarobków wszystkich pracowników </p></h2>");
echo ("<p>select dzial, sum(zarobki) as suma, nazwa_dzial from `pracownicy`, `organizacja` where dzial = id_org group by dzial");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
echo("<table>");
echo("<th>Dzial</th>");
echo("<th>Suma</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
	 
<?php
$sql = 'SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max, nazwa_dzial FROM `pracownicy';
echo ("<h2><p>zadanie 2 - Suma zarobków wszystkich kobiet </p></h2>");
echo ("<p>select dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max, nazwa_dzial from `pracownicy");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, avg(zarobki) as srednia, min(zarobki) as min, max(zarobki) as max, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
echo("<table>");
echo("<th>Dział</th>");
echo("<th>Suma</th>");
echo("<th>Średnia</th>");
echo("<th>Min</th>");
echo("<th>Max</th>");
echo("<th>Nazwa_Działu</th>");
while($row = $result->fetch_assoc()) {
echo("<tr>");
echo("<td>".$row['dzial']."</td><td>".$row['suma']."</td><td>".$row['srednia']."</td><td>".$row['min']."</td><td>".$row['max']."</td><td>".$row["nazwa_dzial"]."</td>");
echo("</tr>");
}
echo("</table>");
?>
