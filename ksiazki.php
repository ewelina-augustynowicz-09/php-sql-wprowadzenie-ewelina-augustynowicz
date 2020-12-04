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
$sql = ("SELECT * FROM bibliotekaAutor");
echo("<h2>Aułtorzy</h2>");
$result=$conn->query($sql);
echo("<select name='Autor' id='id_autor'>");
while($row=$result->fetch_assoc())
{
echo("<option value=".$row["id_autor"]."</option><option vealu=>".$row["Autor"]."</option>");
}
echo("<input type='Submit' value='Autor'><br>");
echo("</select>");
?>

<?php
$sql = ("SELECT * FROM bibliotekaTytuł");
echo("<h2>książki</h2>");
$result=$conn->query($sql);
echo("<select name='Tytuł' id='id_Tytuł'>");
while($row=$result->fetch_assoc())
{
echo("<option vealu=>".$row["id_tytuł"]."</option><option vealu=>".$row["Tytuł"]."</option>");
}
echo("<input type='Submit' value='książka'><br>");
echo("</select");
?>

<?php
$sql = ('SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytuł WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytul_ID');
echo("<h2>Wszystko</h2>");
$result=$conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>Autor</th>");
echo("<th>Tytuł</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
echo("</tr>");
}
echo("</table>");
?>
