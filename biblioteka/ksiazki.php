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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Książki</title>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="container">
            <div class="item colorBlue">
        <h2>Ewelina Augustynowicz klasa 2Ti grupa 2 numer 1</h2>
        <h1><b>Książki</b></h1> 
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
$sql = ("SELECT * FROM bibliotekaAutor");
echo("<h2>Aułtorzy</h2>");
$result=$conn->query($sql);
<form action="bazaWypo.php" method="POST">
echo("<input type="<select name='Autor' id='id_autor'>"");
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
      </div>
    </div>
    </div>
</html>
