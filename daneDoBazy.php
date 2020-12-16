<!DOCTYPE html>
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
    <h1><b>Dane do bazy</b></h1>


</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Dane do Bazy</title>
</head>
<body>
<form action="insert.php" method="POST">
<input type="text" name="imie">
<input type="submit">
</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Dane do Bazy</title>
</head>
<body>
   <h5>⬆insert</h5>
<form action="insert.php" method="POST">
   <h5>imie:</h5>
<input type="text" name="imie">
   <h5>dział:</h5>
<input type="number" name="dzial"></br>
   <h5>zarobki:</h5>
<input type="number" name="zarobki"></br>
   <h5>data urodzenia:</h5>
<input type="date" name="data_urodzenia"></br>
<input type="submit" value="dodaj pracownika">
</form>
<form action="delete.php" method="POST">
   <input type="number" name="id_pracownicy"></br>
   <input type="submit" value="Usuń pracownika">
</form>
</body>
</html>

<?php
$servername = "mysql-ewelina09.alwaysdata.net";
$username = "ewelina09";
$password = "Ewelina@123456";
$dbname = "ewelina09_09";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
echo ("<h2><p>Pracownicy</p></h2>");
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
echo("<table border>");
echo("<table>");
echo("<th>ID</th>"); 
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_Urodzenia</th>");
echo("<th>Dział</th>");
echo("<th>Usuń pracownika</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>
<td>
</form>
<form action='delete.php' method='POST'>
   <input type='number' name='id' value='".$row["id_pracownicy"]."'placeholder='ID PRACOWNIKA' hidden></br>
   <input type='submit' value='Usuń pracownika'>
</form>
</td>
"); 
echo("</tr>");
}
echo("</table>");
?>
