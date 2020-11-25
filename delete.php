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
$sql = "SELECT * FROM pracownicy";
$result = $conn->query($sql);

echo("<table border='1'>");
echo("<th>ID</th>");
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>DELETE</th>");
while($row=$result->fetch_assoc()){
  echo("<tr>"):
  echo("<td>".row["id_pracownicy"]."</td><td>".row["Imie"]."</td><td>".row["Dział"]."</td><td>".row["DELETE"]."</td>);
  <td>
  <from action='delate.php' method='post'>
  <input type='text' name='id' placeholder='do usuniecia' value='" .$row["id"]. "'>
  <input type='submit' value='usun'>
  </from>

</td>");
echo("</tr>");
}
echo("</table>");

?>
