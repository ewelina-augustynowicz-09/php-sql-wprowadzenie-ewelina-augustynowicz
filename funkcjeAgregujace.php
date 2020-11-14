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
    <h1><b>Funkcje agregujące</b></h1>

</html>

<?php
echo ("<h2><p>zadanie 1 - Suma zarobków wszystkich pracowników </p></h2>");
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
echo ("<h2><p>zadanie 2 - Suma zarobków wszystkich kobiet </p></h2>");
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
        
<?php
echo ("<h2><p>zadanie 3 - Suma zarobków mężczyzn pracujących w dziale 2 i 3 </p></h2>"); 
$result = $conn->query('SELECT sum(zarobki) as suma FROM pracownicy where imie not like "%a" and (dzial=2 or dzial=3)');
echo("<table>");
echo("<th>Suma</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["suma"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php 
echo("<h2><p>zadanie 4 - Średnia zarobków wszystkich mężczyzn</p></h2>");
$result = $conn->query('SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a"');
echo("<table>");
echo("<th>Średnia</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["srednia"]."</td>"); 
echo("</tr>");
}               
echo("</table>");
?>

<?php
echo("<h2><p>zadanie 5 - Średnia zarobków pracowników z działu 4</p></h2>");
$result = $conn->query('SELECT avg(zarobki) as srednia from pracownicy where dzial=4');
echo("<table>");
echo("<th>Średnia</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["srednia"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?> 

<?php
echo("<h2><p>zadanie 6 - Średnia zarobków mężczyzn z działu 1 i 2</p></h2>");
$result = $conn->query('SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a" and (dzial=1 or dzial=2)');
echo("<table>");
echo("<th>Średnia</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["srednia"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
         
<?php
echo("<h2><p>zadanie 7 - Ile jest wszystkich pracowników</p></h2>");
$result = $conn->query('SELECT count(imie) as ilosc FROM pracownicy');
echo("<table>");
echo("<th>Ilość</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["ilosc"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
         
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

<h1>Group by</h1>

<?php
echo("<h2><p>zadanie 1 - Suma zarobków w poszczególnych działach</p></h2>");
$result = $conn->query('SELECT dzial, sum(zarobki) as suma, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
echo("<table>");
echo("<th>Dział</th>");
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
echo("<h2><p>zadanie 2 - Ilość pracowników w poszczególnych działach</p></h2>");
$result = $conn->query('SELECT dzial, count(imie) as ilosc, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
echo("<table>");
echo("<th>Dział</th>");
echo("<th>Ilość</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["dzial"]."</td><td>".$row["ilosc"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>                
                  
                
<?php
echo("<h2><p>zadanie 3 -Średnie zarobków w poszczególnych działach</p></h2>");
$result = $conn->query('SELECT dzial, avg(zarobki) as srednia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org group by dzial');
echo("<table>");
echo("<th>Dział</th>");
echo("<th>Średnia</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
                     
               
<?php
echo("<h2><p>zadanie 4 - Suma zarobków kobiet i mężczyzn</p></h2>");
$result = $conn->query('SELECT sum(zarobki) as suma, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec');
echo("<table border>");
echo("<th>Suma</th>");
echo("<th>Płeć</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["suma"]."</td><td>".$row["plec"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
   
                
<?php
echo("<h2><p>zadanie 5 - Średnia zarobków kobiet i mężczyzn</p></h2>");
$result = $conn->query('SELECT avg(zarobki) as srednia, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec');
echo("<table border>");
echo("<th>Średnia</th>");
echo("<th>Płeć</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["srednia"]."</td><td>".$row["plec"]."</td>"); 
echo("</tr>");
}
echo("</table>"); 
?> 

<h1>klauzula HAVING</h1>

<?php
echo("<h2><p>zadanie 1 - Suma zarobków w poszczególnych działach mniejsza od 28</p></h2>");
$result = $conn->query('SELECT sum(zarobki) as suma, dzial, nazwa_dzial from pracownicy, organizacja where dzial=id_org GROUP BY dzial HAVING sum(zarobki)<28');
echo("<table>");
echo("<th>Suma</th>");
echo("<th>Dzial</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["suma"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
echo("<h2><p>zadanie 2 - Średnie zarobków mężczyzn w poszczególnych działach większe od 30</p>");
$result = $conn->query('SELECT avg(zarobki) as srednia, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org AND imie not like "%a" group by dzial having avg(zarobki)>30');
echo("<table>");
echo("<th>Średnia</th>");
echo("<th>Dzial</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["srednia"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
	 
<?php	
echo("<h2><p>zadanie 3 -Ilość pracowników w poszczególnych działach większa od 3</p></h2>");
$result = $conn->query('SELECT count(imie) as ilosc, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial having count(imie)>3);
echo("<table>");
echo("<th>Ilość</th>");
echo("<th>Dzial</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["ilosc"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
echo("</tr>");
}
echo("</table>")
?>
