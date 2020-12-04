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

<?php
echo("<h1>Książki i autorzy:</h1>");
$sql = 'SELECT * FROM bibliotekaTytuł';
echo("<h2>Tytuły:</h2>");
$result = $conn->query($sql);
echo("<table>");
echo("<th>ID</th>");
echo("<th>Tytuł</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
  
<?php
$sql = 'SELECT * FROM biblAutor';
echo("<h2>Autorzy:</h2>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table>");
echo("<th>ID</th>");
echo("<th>Tytuł</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>

<?php
$sql = 'SELECT * FROM bibliotekaAT';
echo("<h2>ID:</h2>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table>");
echo("<th>ID</th>");
echo("<th>ID Autor</th>");
echo("<th>ID Tytuł</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id"]."</td><td>".$row["biblAutor_id"]."</td><td>".$row["biblTytul_id"]."</td>"); 
echo("</tr>");
}
echo("</table>");
?>
  
