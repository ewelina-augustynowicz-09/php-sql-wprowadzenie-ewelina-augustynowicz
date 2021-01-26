<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pętla</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
            <div class="item colorBlue">
        <h2>Ewelina Augustynowicz klasa 2Ti grupa 2 numer 1</h2>
        <h1><b>Pętla</b></h1> 
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
echo("Pętla");
function nazwa($liczba){
   echo("<li>funkcja");
   echo('<li>test ".$liczba);
   for($i=1;$i<$liczba;$i++){
        echo("<li>to jest w pętli: ".$i);
   }
}

nazwa(90);

?>
</div>
</div>
</div>
</html>
