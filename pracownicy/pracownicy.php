<?php
$servername = "mysql-ewelina.alwaysdata.net";
$username = "ewelina";
$password = "Ewelina@123456";
$dbname = "ewelina_ewelina";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pracownicy</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
            <div class="item colorBlue">
        <h2>Ewelina Augustynowicz klasa 2Ti grupa 2 numer 1</h2>
        <h1><b>Pracownicy</b></h1> 
      </div> 
    <div class="item colorRed">
        <div class="nav">
          <h2> Menu:</h2>
          <ul>
            <li><a href="https://github.com/ewelina-augustynowicz-09/sql-php-wprowadzenie">github</a></li>
            <br>
            <li><a class="nav_link" href="index.php"> Strona głowna</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy.php"> Pracownicy </a></li>
            <br>
            <li><a class="nav_link" href="pracownicyiorganizacja.php"> Pracownicy i organizacja </a></li>
            <br>
            <li><a class="nav_link" href="funkcjeAgregujace.php"> Funkcje agregujące</a></li>
            <br>
            <li><a class="nav_link" href="dataiczas.php"> Data i czas</a></li>
            <br>
            <li><a class="nav_link" href="formularz.html">Formularz</a></li>
            <br>
            <li><a class="nav_link" href="insert.php">Insert</a></li>
            <br>
            <li><a class="nav_link" href="daneDoBazy.php">Dane do bazy</a></li>
            <br>
            <li><a class="nav_link" href="petla.php">Pętla</a></li>
            <br>
            <li><a class="nav_link" href="delete.php">Delete</a></li>
            <br>
            <li><a class="nav_link" href="ksiazki.php">Książki</a></li>
          </ul> 
      </div> 
      </div>
    
<div class="item colorGreen">
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

</div>
</div>
</div>
</html>
